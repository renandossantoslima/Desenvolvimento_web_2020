<?php

//classe dashboard
class Dashboard {
	public $data_inicio;
	public $data_fim;
	public $numeroVendas;
	public $totalVendas;
	public $clientesAtivos;
	public $clientesInativos;
	public $totalReclamacao;
	public $totalElogio;
	public $totalSugestao;
	public $totalDespesa;

	public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo,$valor){
		$this->$atributo = $valor;
		return $this;
	}

}

//classse de conexao com o banco
class Conexao {

	private $host = 'localhost:3306';
	private $db_name = 'dashboard';
	private $user = 'root';
	private $pass = '';

	public function conectar() {
		try {

			$conexao = new PDO("mysql:host=$this->host;dbname=$this->db_name","$this->user","$this->pass");

			//
			$conexao->exec('set charset set utf8');

			return $conexao;

		}catch (PDOException $e){
			echo '<p>'. $e->getMessage() . '</p>';
		}
	}
}

//classe (model)
class Bd {
	private $conexao;
	private $dashboard;

	public function __construct(Conexao $conexao, Dashboard $dashboard) {
		$this->conexao = $conexao->conectar();
		$this->dashboard = $dashboard;
	}

	public function getNumeroVendas() {
		$query = 'select count(*) as numero_vendas from tb_vendas where data_venda between :data_inicio and :data_fim';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':data_inicio',$this->dashboard->__get('data_inicio'));
		$stmt->bindValue(':data_fim',$this->dashboard->__get('data_fim'));
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
	}

	public function getTotalVendas() {
		$query = 'select sum(total) as total_vendas from tb_vendas where data_venda between :data_inicio and :data_fim';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':data_inicio',$this->dashboard->__get('data_inicio'));
		$stmt->bindValue(':data_fim',$this->dashboard->__get('data_fim'));
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
	}

	public function getClienteAtivos() {
		$query = 'select count(*) as clientes_ativos from tb_clientes where cliente_ativo = 1';

		$stmt = $this->conexao->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_OBJ)->clientes_ativos;
	}

	public function getClienteInativos() {
		$query = 'select count(*) as clientes_inativos from tb_clientes where cliente_ativo = 0';

		$stmt = $this->conexao->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_OBJ)->clientes_inativos;
	}

	public function getReclamacao() {
		$query = 'select count(*) as total_reclamacao from tb_contatos where tipo_contato = 1';

		$stmt = $this->conexao->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_OBJ)->total_reclamacao;
	}

	public function getElogio() {
		$query = 'select count(*) as total_elogio from tb_contatos where tipo_contato = 2';

		$stmt = $this->conexao->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_OBJ)->total_elogio;
	}

	public function getContato() {
		$query = 'select count(*) as total_sugestao from tb_contatos where tipo_contato = 3';

		$stmt = $this->conexao->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_OBJ)->total_sugestao;
	}

	public function getTotalDespesas() {
		$query = 'select sum(total) as total_despesa from tb_despesas WHERE data_despesa between :data_inicio and :data_fim';

		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':data_inicio', $this->dashboard->__get('data_inicio'));
		$stmt->bindValue(':data_fim',$this->dashboard->__get('data_fim'));
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_OBJ)->total_despesa;
	}
}



//logica do script
$dashboard = new Dashboard();

$conexao = new Conexao();

$competencia = explode('-',$_GET['competencia']);
$ano = $competencia[0];
$mes = $competencia[1];

$dias_do_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

$dashboard->__set('data_inicio',$ano. '-'.$mes.'-01');
$dashboard->__set('data_fim',$ano. '-'.$mes.'-'.$dias_do_mes);

$bd = new Bd($conexao,$dashboard);

//transformação em moeda
$total_das_vendas = str_replace('.', ',', $bd->getTotalVendas());
$total_de_despesas = str_replace('.', ',', $bd->getTotalDespesas());

$dashboard->__set('numeroVendas',$bd->getNumeroVendas());
$dashboard->__set('totalVendas',$total_das_vendas);
$dashboard->__set('clientesAtivos',$bd->getClienteAtivos());
$dashboard->__set('clientesInativos',$bd->getClienteInativos());
$dashboard->__set('totalReclamacao',$bd->getReclamacao());
$dashboard->__set('totalElogio',$bd->getElogio());
$dashboard->__set('totalSugestao',$bd->getContato());
$dashboard->__set('totalDespesa',$total_de_despesas);

echo json_encode($dashboard);

?>
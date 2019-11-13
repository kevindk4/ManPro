<?php
class DB{
    public $dbconnection;

    function __construct(){
        $this->servername = "10.100.70.70\akreditasi2020";
        $this->username = "guestManPro";
        $this->password = "Testing123";
        $this->dbname = "akreditasi2020";
        $this->dbConInfo= array("Database"=>$this->dbname,"UID"=>$this->username,"PWD"=>$this->password);
    }

    function openConnection(){
        $this->dbconnection = sqlsrv_connect($this->servername,$this->dbConInfo);
        
		if ($this->dbconnection) {
			//success
		} else {
			echo "Connection could not be established.<br />";
			die(print_r(sqlsrv_errors(), true));
		}
	}
	

    function executeStoredProcedure($query, $param){
        $this->openConnection();
        $noCount = sqlsrv_query($this->dbconnection,"SET NOCOUNT ON");
        $statement = sqlsrv_prepare($this->dbconnection,$query,$param);
		$query_result = sqlsrv_execute($statement);
		while ($row = sqlsrv_fetch_array($statement, SQLSRV_FETCH_NUMERIC)) {
			if ( $row === false) {
				if (($errors = sqlsrv_errors()) != null) {
					foreach ($errors as $error) {
						echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
						echo "code: " . $error['code'] . "<br />";
						echo "message: " . $error['message'] . "<br />";
					}
				}
			} 
			$result[] = $row;
		}
		sqlsrv_close($this->dbconnection);
		return $result;
	}
}
?>
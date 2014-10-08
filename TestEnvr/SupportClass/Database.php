<?php 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$hostname = "localhost";
$dataname = "u908657796_alz";
$password = "root";
$username = "root";

/*
$hostname = "mysql.freehostingnoads.net";
$dataname = "u908657796_alz";
$password = "trainhopper123";
$username = "u908657796_alz1";
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function connect()
{
	global $hostname,$dataname,$password,$username;	
	$con=mysqli_connect($hostname ,$username,$password,$dataname);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
  return $con;
} 

}






//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function newDatabase($databaseName)
{
global $hostname,$dataname,$password,$username;	

$con=mysqli_connect($hostname ,$username,$password,$dataname);
$sql='CREATE DATABASE '.$databaseName;

if (mysqli_query($con,$sql)) {
 // echo 'Database '.$databaseName.' created successfully';
} else {
  echo "Error creating database: " . mysqli_error($con);
}
	
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function newTable($tableName,$listCol)
{
global $hostname,$dataname,$password,$username;	
$con=mysqli_connect($hostname ,$username,$password,$dataname);
// Create table
//$sql='CREATE TABLE '.$tableName.'('.$listCol[0].' Double,'.$listCol[1].' Double,'.$listCol[2].' Double,'.$listCol[3].' Double,'.$listCol[4].' VARCHAR(30))';

//$sql='CREATE TABLE '.$tableName.'('.$listCol.'Double)';

$sql="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";

if (mysqli_query($con,$sql)) {
 // echo 'Table '.$tableName.' created successfully';
} else {
  echo "Error creating table: " . mysqli_error($con);
}

	
	
}



/*
///first time data inject
function insertInitial($value,$columnName,$tableName,$t,$time)
{

global $hostname,$dataname,$password,$username;	

$time = $time;
$con=mysqli_connect($hostname ,$username,$password,$dataname);
$tName = "t";
$timeName = "time";

mysqli_query($con,'INSERT INTO '.$tableName.' ('.$columnName.','.$tName.','.$timeName.')
VALUES ('.$value.','.$t.','.$time.')');

//Debug:
//echo '\nexported'.$value.' in column '.$columnName.' and table '.$tableName.'\n';
	
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

///first time data inject
function insertInitialArray($values,$columnName,$tableName,$time)
{
	$count = count($values);
	for($i = 0; $i < $count; $i++)
	{
	$value = $values[$i];
	insertInitial($value,$columnName,$tableName,$i,$time[$i]);

	}
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function insert($value,$columnName,$tableName)
{
global $hostname,$dataname,$password,$username;	

$con=mysqli_connect($hostname ,$username,$password,$dataname);


mysqli_query($con,'INSERT INTO '.$tableName.' ('.$columnName.')
VALUES ('.$value.')');

//Debug:
//Debug: echo '\nexported'.$value.' in column '.$columnName.' and table '.$tableName.'\n';
	
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function insertArray($values,$columnName,$tableName)
{
	$count = count($values);
	for($i = 0; $i < $count; $i++)
	{
	$value = $values[$i];
	insert($value,$columnName,$tableName);
	}
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function update($t,$values,$columnName,$tableName)
{
global $hostname,$dataname,$password,$username;	
$timeName = 't';

$con=mysqli_connect($hostname ,$username,$password,$dataname);

mysqli_query($con,'UPDATE '.$tableName.' SET '.$columnName.'='.$values.'
WHERE '.$timeName.'='.$t.'');


}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function deleteTable($tableName)
{
	global $hostname,$dataname,$password,$username;	
	$con=mysqli_connect($hostname ,$username,$password,$dataname);
	$sql='DROP TABLE `a2308552_alizee`.`'.$tableName.'`';

	if (mysqli_query($con,$sql)) {
  		echo 'Table '.$tableName.' deleted successfully';
		} 	
	else {
  		echo "Error deleting table: " . mysqli_error($con);
		 }
	
	
}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function select($t,$columnName,$tableName)
{

$timeName = 't';
global $hostname,$dataname,$password,$username;	
	$con=mysqli_connect($hostname ,$username,$password,$dataname);

$arrayVal  = mysqli_query($con,'SELECT '.$columnName.' FROM '.$tableName.'
WHERE '.$timeName.'='.$t.'');


$value = mysqli_fetch_row($arrayVal);

return $value[0];


}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function selectColumn($columnName,$tableName)
{

$timeName = 't';
global $hostname,$dataname,$password,$username;	
	$con=mysqli_connect($hostname ,$username,$password,$dataname);

$arrayVal  = mysqli_query($con,'SELECT '.$columnName.' FROM '.$tableName.'');

$arrayOfValues = array();

while ($row = mysqli_fetch_array($arrayVal))
{
    $arrayOfValues[] =  $row[$columnName];  
} 

return $arrayOfValues;

}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function delete($t,$columnName,$tableName)
{


global $hostname,$dataname,$password,$username;	
	$con=mysqli_connect($hostname ,$username,$password,$dataname);

mysqli_query($con,'DELETE FROM '.$tableName.' WHERE t='.$t.'');

}





*/
?>
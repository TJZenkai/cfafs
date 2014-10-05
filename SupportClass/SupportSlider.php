<?PHP


function getFurnitureArray()
{
	$imageArray = generateFurnitureImageArray();
	$descriptionArray = generateFurnitureDescriptionArray();
	$titleArray = generateFurnitureTitleArray();
	$furnitureArray = array();
	
	//for(i=0;i<count($furnitureImageArray);i++)
	$furnitureArray[0]= $imageArray;
	$furnitureArray[1]= $descriptionArray;
	$furnitureArray[2] = $titleArray;
	return $furnitureArray;
	
}

function generateFurnitureImageArray()
{
	$imageArray= array();
	$imageArray[0]= '<img src="css/images/furniture1.jpg" alt="">';
	$imageArray[1]= '<img src="css/images/furniture2.jpg" alt="">';
	$imageArray[2]= '<img src="css/images/furniture3.jpg" alt="">';
	$imageArray[3]= '<img src="css/images/furniture4.gif" alt="">';
	return $imageArray;
	
}

function generateFurnitureDescriptionArray()
{
	$descriptionArray=array();
	$descriptionArray[0] = "Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	$descriptionArray[1] = "2Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	$descriptionArray[2] = "3Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	$descriptionArray[3] = "4Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	return $descriptionArray;
		
	
}

function generateFurnitureTitleArray()
{
	$titleArray=array();
	$titleArray[0] = "Its a Sofa";
	$titleArray[1] = "Its a Bed";
	$titleArray[2] = "Its a Table";
	$titleArray[3] = "Its a Couch";
	return $titleArray;
}

function getFurnitureImage($count,$furnitureArray)
{

	echo $furnitureArray[0][$count];
	
}

function getFurnitureDescription($count,$furnitureArray)
{
	echo $furnitureArray[1][$count];
}

function getFurnitureTitle($count,$furnitureArray)
{
	echo $furnitureArray[2][$count];
}


?>	
            

<?PHP


function getElectronicsArray()
{
	$imageArray = generateElectronicsImageArray();
	$descriptionArray = generateElectronicsDescriptionArray();
	$titleArray = generateElectronicsTitleArray();
	$electronicsArray = array();
	
	//for(i=0;i<count($electronicsImageArray);i++)
	$electronicsArray[0]= $imageArray;
	$electronicsArray[1]= $descriptionArray;
	$electronicsArray[2] = $titleArray;
	return $electronicsArray;
	
}

function generateElectronicsImageArray()
{
	$imageArray= array();
	$imageArray[0]= '<img src="css/images/furniture1.jpg" alt="">';
	$imageArray[1]= '<img src="css/images/furniture2.jpg" alt="">';
	$imageArray[2]= '<img src="css/images/furniture3.jpg" alt="">';
	$imageArray[3]= '<img src="css/images/furniture4.gif" alt="">';
	return $imageArray;
	
}

function generateElectronicsDescriptionArray()
{
	$descriptionArray=array();
	$descriptionArray[0] = "Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	$descriptionArray[1] = "2Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	$descriptionArray[2] = "3Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	$descriptionArray[3] = "4Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	return $descriptionArray;
		
	
}

function generateElectronicsTitleArray()
{
	$titleArray=array();
	$titleArray[0] = "Its a Sofa";
	$titleArray[1] = "Its a Bed";
	$titleArray[2] = "Its a Table";
	$titleArray[3] = "Its a Couch";
	return $titleArray;
}

function getElectronicsImage($count,$electronicsArray)
{

	echo $electronicsArray[0][$count];
	
}

function getElectronicsDescription($count,$electronicsArray)
{
	echo $electronicsArray[1][$count];
}

function getElectronicsTitle($count,$electronicsArray)
{
	echo $electronicsArray[2][$count];
}


?>	      


<?PHP


function getOtherArray()
{
	$imageArray = generateOtherImageArray();
	$descriptionArray = generateOtherDescriptionArray();
	$titleArray = generateOtherTitleArray();
	$otherArray = array();
	
	//for(i=0;i<count($otherImageArray);i++)
	$otherArray[0]= $imageArray;
	$otherArray[1]= $descriptionArray;
	$otherArray[2] = $titleArray;
	return $otherArray;
	
}

function generateOtherImageArray()
{
	$imageArray= array();
	$imageArray[0]= '<img src="css/images/furniture1.jpg" alt="">';
	$imageArray[1]= '<img src="css/images/furniture2.jpg" alt="">';
	$imageArray[2]= '<img src="css/images/furniture3.jpg" alt="">';
	$imageArray[3]= '<img src="css/images/furniture4.gif" alt="">';
	return $imageArray;
	
}

function generateOtherDescriptionArray()
{
	$descriptionArray=array();
	$descriptionArray[0] = "Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	$descriptionArray[1] = "2Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	$descriptionArray[2] = "3Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	$descriptionArray[3] = "4Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque penatibus magnis dis parturient montes, nascetur ridiculus mus...Cum sociis natoque";
	return $descriptionArray;
		
	
}

function generateOtherTitleArray()
{
	$titleArray=array();
	$titleArray[0] = "Its a Sofa";
	$titleArray[1] = "Its a Bed";
	$titleArray[2] = "Its a Table";
	$titleArray[3] = "Its a Couch";
	return $titleArray;
}

function getOtherImage($count,$otherArray)
{

	echo $otherArray[0][$count];
	
}

function getOtherDescription($count,$otherArray)
{
	echo $otherArray[1][$count];
}

function getOtherTitle($count,$otherArray)
{
	echo $otherArray[2][$count];
}


?>	   
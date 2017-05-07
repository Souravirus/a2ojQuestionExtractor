<html>
    <body>
    <?php 
        /*function is_online(){
            return (checkdnsrr('google.com', 'ANY'));
        }
        $url="https://www.a2oj.com/categories";
        while(1){
            if(is_online()==1){
                $output=file_get_contents($url);
                //echo $output;
                $topics=new DOMDocument();
                libxml_use_internal_errors(TRUE);
                if(!empty($html)){
                    $topics->loadHTML($html);
                    libxml_clear_errors();
                    $proper=new DOMXPath($topics);
                    $row=$proper->query('//*');
                    if($row->length>0){
                        foreach($row as $r){
                            echo $r->nodeValue."<br/>";
                        }
                    }
                }
                break;
                }
        }*/
        $html = file_get_contents('http://pokemondb.net/evolution'); //get the html returned from the following url

$pokemon_doc = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned

	$pokemon_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all the h2's with an id
	$pokemon_row = $pokemon_xpath->query('//h2[@id]');

	if($pokemon_row->length > 0){
		foreach($pokemon_row as $row){
			echo $row->nodeValue . "<br/>";
		}
	}
}
    ?>
    </body>
</html>
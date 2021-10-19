<?php
     
     include 'includes/header.php';
     include 'includes/footer.php';
     //include 'includes/navbar.php';

?>

<section>
	<?php
		//EXERCICE 1 => Utilisation des tableaux
		$bonnets = ['Bonnet en laine', 'Bonnet en laine bio', 'Bonnet en laine et cachemire', 'Bonnet arc-en-ciel'];
		
		foreach ($bonnets  as $bonnet){
			echo '
        <table>
                <tr>
                    <td>'.$bonnet.'</td>
                </tr>
            </table>';
			
		}
		
		//EXERCICE 2 => Tableaux imbriqués
		$arrayImbrique = [
			'Bonnet en laine' => 10 .'€',
			'Bonnet en laine bio' => 14 .'€',
			'Bonnet enlaine et cachemire' => 20 .'€',
			'Bonnet arc-en-ciel' =>12 .'€'
		];
		
		foreach ($arrayImbrique as $key => $value) {
			echo
				'<table>
                <tr>
                    <td>'.$key.'</td>
                    <td>'.$value.'</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida</td>
                </tr>
            </table>';
		}
		
		//EXERCICE 3 => Conditions
		foreach ($arrayImbrique as $key => $value) {
			if ($value > 12){
				echo
					'<table>
                    <tr>
                        <td></td>
                        <td style="color: blue">'.$value.'</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida</td>
                    </tr>
                    <tbody>
                    <tr>
                    <td>'.$key.'</td>
                    <td></td>
                    <td></td>
</tr>
</tbody>
                </table>';
			} elseif ($value <= 12){
				echo
					'<table>
                    <tr>
                        <td>'.$key.'</td>
                        <td style="color: green">'.$value.'</td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida</td>
                    </tr>
                </table>';
			}
		}
		
		//EXERCICE 4  => Fonctions
		function priceHT($price){
			$tva = 19.6/100;
			return $price / (1 + $tva);
		}
		
		foreach ($arrayImbrique as $key => $value){
			echo
				'
        <table>
          <thead>
                <tr>
                      <th scope="col">Nom</th>
                      <th scope="col">Prix TTC</th>
                      <th scope="col">Prix HT</th>
                </tr>
          </thead>
        <tbody>
            <tr>
                  <td>'.$key.'</td>
                  <td>'.$value.'</td>
                  <td>'.priceHT($value).'</td>
            </tr>
        </tbody>
        </table>
    ';
		}
		
		
		
		//EXERCICE  5 => Manipulation des chaines de caractère et des variables
		function displayData($dataKey, $dataValue){
			echo '
    <table>
          <thead>
                <tr>
                      <th scope="col">Nom</th>
                      <th scope="col">Prix TTC</th>
                      <th scope="col">Prix HT</th>
                </tr>
          </thead>
        <tbody>
            <tr>
                  <td>'.$dataKey.'</td>
                  <td>'.$dataValue.'</td>
                  <td>'.priceHT($dataValue).'</td>
            </tr>
        </tbody>
        </table>
    ';
		}
		
		foreach ($arrayImbrique as $key => $value){
			displayData($key, $value);
		}
		
		echo '<h1>EXERCICE 6</h1>';
		
		
		foreach ($arrayBonnets as $key => $value){
			displayData2($key, $value);
		}
  
	?>
</section>








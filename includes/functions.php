<?php
	
	function priceHT2($price): float
	{
		return $price / 1.2;
	}
	
	function displayData2($dataKey, $dataValue){
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
                  <td>'. priceHT2($dataValue).'</td>
            </tr>
        </tbody>
        </table>
    ';
	}
	


<?php
	class operacions{				
		public function suma($op1,$op2,$op3){
			$resultat = ($op1 + $op2) + $op3;
			return $resultat;
		}
		
		public function resta($op1,$op2,$op3){
			$resultat = ($op1 - $op2) - $op3;
			return $resultat;
		}
		
		public function multiplica($op1,$op2,$op3){
			$resultat = ($op1 * $op2) * $op3;
			return $resultat;
		}
		
		public function divideix($op1,$op2,$op3){
			$resultat = $op1 / $op2;
			$resultat = $resultat / $op3;
			return $resultat;
		}
		public function potencia($op1,$op2,$op3){
			$resultat = ($op1**$op2)**$op3;
			return $resultat;
		}
		public function trigonometriques($op1){
			$rad = deg2rad($op1);
			$resultat[0] = sin($rad);
			$resultat[1] = cos($rad);
			$resultat[2] = tan($rad);
			return $resultat;
		}
	}
?>

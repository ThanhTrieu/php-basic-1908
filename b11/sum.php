<?php
	class SumNumber
	{
		private function totalNumber($a, $b)
		{
			return $a + $b;
		}
		
		public function result()
		{
			$data = $this->inputData();
			if(empty($data[0]) || empty($data[1])){
				// nhap sai du lieu
				header("Location: index4.php?state=fail");
			} else {
				$nghiem = $this->totalNumber($data[0], $data[1]);
				header("Location: index4.php?state=ok&result={$nghiem}");
			}
		}
		
		private function inputData()
		{
			if(isset($_POST['btnSum'])){
				$a = $_POST['number1'] ?? '';
				$a = is_numeric($a) ? $a : '';
				
				$b = $_POST['number2'] ?? '';
				$b = is_numeric($b) ? $b : '';
				return [$a, $b];
			}
			return false;
		}
	}
	
	$number = new SumNumber;
	$number->result();

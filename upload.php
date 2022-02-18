<?php 
                require_once 'include.php';
                $file = $_FILES['file_up'];
                move_uploaded_file($file['tmp_name'], "./test.csv");
                $fh = fopen( "test.csv", "a+");
                $arr_key=["name","email","phone","enrollNumber","date"];
                $j =1;
                while (($row = fgetcsv($fh, 0, ",")) !== FALSE) {
                    foreach ($row as $i => $value) {
                        $csvData[$j][$arr_key[$i]] = $value;
                    }
                    $csvData[$j]['id'] = maxId()+1;
                    $j++;
                    $data = array_merge($csvData,$student );
                $datas = json_encode($data, JSON_PRETTY_PRINT);
                file_put_contents('js/student.json',$datas,);
                            }
                header('location: student.php');
?>
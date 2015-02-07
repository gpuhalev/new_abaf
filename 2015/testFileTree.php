                    <?php
						/*$iterator = new RecursiveIteratorIterator(
										new RecursiveDirectoryIterator('./results/'), RecursiveDirectoryIterator::SKIP_DOTS);
						
						foreach($iterator as $file) {
							if($file->isDir()) {
								echo "$file <br>";
								//echo strtoupper($file->getRealpath()), PHP_EOL;
							}
						}
						$path = './results/Balkan Half Marathon Championships';

						$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path),RecursiveDirectoryIterator::SKIP_DOTS);
						foreach($objects as $name => $object){
							echo "$name <br>";
						}
						
						$path = "./results/Balkan Half Marathon Championships";
						$files = new DirectoryIterator($path);
						$files_array = array();
						
						while($files->valid()) {
								// sort key, ie. modified timestamp
								$key = $files->getMTime();
								$data = $files->getFilename();
								$files_array[$key] = $data;
								$files->next();
						}
						ksort($files_array);
						foreach($files_array as $key => $file){
							print $key . " => " . $file . "<br>";
						}*/
						
						$dir = "./results";
						checkDirectory($dir);
						// Open a known directory, and proceed to read its contents
						function checkDirectory($dir){
							if (is_dir($dir)) {
								if ($dh = opendir($dir)) {
									while (($file = readdir($dh)) !== false) {
										 if ($file == '.' || $file == '..') {
											continue;
										}
										$file_path = $dir . DIRECTORY_SEPARATOR . $file;
										if(is_dir($file_path)){
											echo "<p class='content_title'>$file <p>";
										}else{
											echo "<p>$file <p>";
										}
									}
									closedir($dh);
								}
							}
						}
					?>
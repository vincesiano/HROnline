<?php
	$positionsql = "
										SELECT
											SUM(CASE WHEN POSITION = 'H. R.' THEN 1 ELSE 0 END) as 'HR',
											SUM(CASE WHEN POSITION = 'Marketing Manager' THEN 1 ELSE 0 END) as 'MM', 
											SUM(CASE WHEN POSITION = 'IT Helpdesk Team Lead' THEN 1 ELSE 0 END) as 'ITlead',
											SUM(CASE WHEN POSITION = 'Web Developer' THEN 1 ELSE 0 END) as 'webdev',
											SUM(CASE WHEN POSITION = 'Customer Service Representative' THEN 1 ELSE 0 END) as 'CSR',
											SUM(CASE WHEN POSITION = 'Content Writer' THEN 1 ELSE 0 END) as 'CW',
											SUM(CASE WHEN POSITION = 'Accountant' THEN 1 ELSE 0 END) as 'accountant',
											SUM(CASE WHEN POSITION = 'Business Development Manager' THEN 1 ELSE 0 END) as 'BDM',
											SUM(CASE WHEN POSITION = 'Telesales Agent' THEN 1 ELSE 0 END) as 'TA',
											SUM(CASE WHEN POSITION = 'Software Developer' THEN 1 ELSE 0 END) as 'sofdev',
											SUM(CASE WHEN POSITION = 'IT Helpdesk' THEN 1 ELSE 0 END) as 'IThelp',
											SUM(CASE WHEN POSITION = 'Outbound Sales Rep.' THEN 1 ELSE 0 END) as 'OSR',
											SUM(CASE WHEN POSITION = 'Senior .NET Developer' THEN 1 ELSE 0 END) as 'SND',
											SUM(CASE WHEN POSITION = 'IT Manager' THEN 1 ELSE 0 END) as 'ITmanager',
											SUM(CASE WHEN POSITION = 'Project Manager' THEN 1 ELSE 0 END) as 'PM',
											SUM(CASE WHEN POSITION = 'Senior Software Developer' THEN 1 ELSE 0 END) as 'SSD',
											SUM(CASE WHEN POSITION = '.NET Developer' THEN 1 ELSE 0 END) as 'NETdev',
											SUM(CASE WHEN POSITION = 'Contract Centre Agent' THEN 1 ELSE 0 END) as 'CCA',
											SUM(CASE WHEN POSITION = 'Intern' THEN 1 ELSE 0 END) as 'intern',
											SUM(CASE WHEN POSITION = 'Finance Officer' THEN 1 ELSE 0 END) as 'FO',
											SUM(CASE WHEN POSITION = 'Admin Assistant' THEN 1 ELSE 0 END) as 'AA',
											SUM(CASE WHEN POSITION = 'Front End Web and HTML Designer' THEN 1 ELSE 0 END) as 'frontWeb',
											SUM(CASE WHEN POSITION = 'Various Position' THEN 1 ELSE 0 END) as 'VP',
											SUM(CASE WHEN POSITION = 'Reports Analyst' THEN 1 ELSE 0 END) as 'RA',
											SUM(CASE WHEN POSITION = 'HR Manager' THEN 1 ELSE 0 END) as 'HRmanager',
											SUM(CASE WHEN POSITION = 'IT Admin' THEN 1 ELSE 0 END) as 'ITadmin',
											SUM(CASE WHEN POSITION = 'IT Telesales Lead' THEN 1 ELSE 0 END) as 'ITtelesales',
											SUM(CASE WHEN POSITION = 'IT Helpdesk Manager' THEN 1 ELSE 0 END) as 'ITHM',
											SUM(CASE WHEN POSITION = 'Lead Verification Specialist' THEN 1 ELSE 0 END) as 'LVS',
											SUM(CASE WHEN POSITION = 'Customer Service Representative - English' THEN 1 ELSE 0 END) as 'CSRenglish',
											SUM(CASE WHEN POSITION = 'Customer Service Representative - Mandarin' THEN 1 ELSE 0 END) as 'CSRmandarin',
											SUM(CASE WHEN POSITION = 'Finance Manager' THEN 1 ELSE 0 END) as 'FM',
											SUM(CASE WHEN POSITION = 'Others' THEN 1 ELSE 0 END) as 'others'

										FROM 
    										tbl_application
    									WHERE
    										timestamp BETWEEN '$startDate' AND '$endDate'";
										
   										$result = $conn->query($positionsql);
										$row = $result->fetch_assoc();
									
										echo "
											<tr><td>Human Resource</td>
											<td>".$row['HR']."</td></tr>
											<tr><td>Marketing Manager</td>
											<td>".$row['MM']."</td></tr>
											<tr><td>IT Helpdesk Team Lead</td>
											<td>".$row['ITlead']."</td></tr>
											<tr><td>Web Developer</td>
											<td>".$row['webdev']."</td></tr>
											<tr><td>Customer Service Representative</td>
											<td>".$row['CSR']."</td></tr>
											<tr><td>Content Writer</td>
											<td>".$row['CW']."</td></tr>
											<tr><td>Accountant</td>
											<td>".$row['accountant']."</td></tr>
											<tr><td>Business Development Manager</td>
											<td>".$row['BDM']."</td></tr>
											<tr><td>Telesales Agent</td>
											<td>".$row['TA']."</td></tr>
											<tr><td>Software Developer</td>
											<td>".$row['sofdev']."</td></tr>
											<tr><td>IT Helpdesk</td>
											<td>".$row['IThelp']."</td></tr>
											<tr><td>Outbound Sales Representative</td>
											<td>".$row['OSR']."</td></tr>
											<tr><td>Senior .NET Developer</td>
											<td>".$row['SND']."</td></tr>
											<tr><td>IT Manager</td>
											<td>".$row['ITmanager']."</td></tr>
											<tr><td>Project Manager</td>
											<td>".$row['PM']."</td></tr>
											<tr><td>Senior Software Developer</td>
											<td>".$row['SSD']."</td></tr>
											<tr><td>.NET Developer</td>
											<td>".$row['NETdev']."</td></tr>
											<tr><td>Contract Centre Agent</td>
											<td>".$row['CCA']."</td></tr>
											<tr><td><a href='#' data-toggle='modal' data-target='#listmodal'>Intern</a></td>
											<td>".$row['intern']."</td></tr>
											<tr><td>Finance Officer</td>
											<td>".$row['FO']."</td></tr>
											<tr><td>Admin Assistant</td>
											<td>".$row['AA']."</td></tr>
											<tr><td>Front End Web and HTML Designer</td>
											<td>".$row['frontWeb']."</td></tr>
											<tr><td>Various Position</td>
											<td>".$row['VP']."</td></tr>
											<tr><td>Reports Analyst</td>
											<td>".$row['RA']."</td></tr>
											<tr><td>HR Manager</td>
											<td>".$row['HRmanager']."</td></tr>
											<tr><td>IT Admin</td>
											<td>".$row['ITadmin']."</td></tr>
											<tr><td>IT Telesales Lead</td>
											<td>".$row['ITtelesales']."</td></tr>
											<tr><td>IT Helpdesk Manager</td>
											<td>".$row['ITHM']."</td></tr>
											<tr><td>Lead Verification Specialist</td>
											<td>".$row['LVS']."</td></tr>
											<tr><td>Customer Service Representative - English</td>
											<td>".$row['CSRenglish']."</td></tr>
											<tr><td>Customer Service Representative - Mandarin</td>
											<td>".$row['CSRmandarin']."</td></tr>
											<tr><td>Finance Manager</td>
											<td>".$row['FM']."</td></tr>
											<tr><td>Others</td>
											<td>".$row['others']."</td></tr>

						
											
											";
										?>

										
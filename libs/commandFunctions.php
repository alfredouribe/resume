<?php
    include "db.php";

    $command = explode(" ", $_POST["command"]);

    switch($command[0]){

        case "cv":
        case "CV":
        case "Cv":
            if(isset($command[1])){
                switch($command[1]){
                    case "--help":
                        $query = "select * from cv_commands where status=1";
                        $result = $conn->query($query);
                        
                        $commands = array();
                        $i = 0;
        
                        if($result && $result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                $commands[$i] = "<div class='col-md-3' onclick='callCommand(\"cv ".$row['name']."\")' style='cursor:pointer; text-decoration: underline'><b>".$row["name"]."</b></div>";
                                $commands[$i] .= "<div class='col-md-4'>".$row["description"]."</div>";
                                $i++;
                            }
            
                            $results["status"] = "OK";
                            $results["message"] = implode("<br>", $commands);
                        }else{
                            $results["status"] = "Error";
                            $results["status"] = "Error to read information.";
                        }
        
                        
                    break;
        
                    case "download":
                        $fileName = "files/testFile.pdf";
        
                        $results["status"] = "OK";
                        $results["message"] = "<a href='$fileName' target='_blank'>Click here to download</a>";
        
                    break;
        
                    case "clear":
                        $results["status"];
                        $results["message"] = "Reseting";
                    break;
        
                    case "skills":
                        $skills = "<ul>";
                        $skills .= "<li><h2>Skills</h2>";
                            $skills .= "<ul>";
                            $skills .= "<li>PHP</li>";
                            $skills .= "<li>HTML5</li>";
                            $skills .= "<li>CSS3</li>";
                            $skills .= "<li>Bootstrap</li>";
                            $skills .= "<li>jQuery</li>";
                            $skills .= "<li>JavaScript</li>";
                            $skills .= "<li>Xammp</li>";
                            $skills .= "<li>Linux</li>";
                            $skills .= "<li>Git</li>";
                            $skills .= "<li>MS Office</li>";
                            $skills .= "<li>MySQL</li>";
                            $skills .= "<li>JSON</li>";
                            $skills .= "<li>XML</li>";
                            $skills .= "<li>VMWare</li>";
                            $skills .= "<li>SmartGit</li>";
                            $skills .= "<li>PHPMyAdmin</li>";
                            $skills .= "<li>Python</li>";
                            $skills .= "<li>Django</li>";
                            $skills .= "<li>AEM6</li>";
                            $skills .= "<li>Scrum</li>";
                            $skills .= "<li>Trello</li>";
                            $skills .= "<li>SOAP</li>";
                            $skills .= "<li>API REST</li>";
                            $skills .= "<li>Laravel</li>";
                            $skills .= "<li>Angular</li>";
                            $skills .= "<li>TypeScript</li>";
                            $skills .= "<li>Ionic</li>";
                            $skills .= "</ul>";
                        $skills .= "</li>";
                        $skills .= "<li><h2>Highlights</h2>";
                            $skills .= "<ul>";
                                $skills .= "<li>Fluent in English B2 IELTS</li>";
                                $skills .= "<li>Leader</li>";
                                $skills .= "<li>Project Management</li>";
                                $skills .= "<li>Web Developing</li>";
                                $skills .= "<li>Business Analysis in TI</li>";
                                $skills .= "<li>Communication Skills</li>";
                            $skills .= "</ul>";
                        $skills .= "</li>";
                        $skills .= "</ul>";
        
                        $results["status"] = "OK";
                        $results["message"] = $skills;
                    break;
        
                    case "photo":
                        $image = "<img src='img/alfredouribe_profile.png' width='300px'>";
        
                        $results["status"] = "OK";
                        $results["message"] = $image;
                    break;
        
                    case "education":
                        $about = "<b>Computer Engineering</b><br>
                        Universidad Michoacana de San Nicolás de Hidalgo<br>
                        June, 2015<br><br>
        
                        <b>Bachelor in Computer Administration</b><br>
                        Universidad Sor Juana Inés de la Cruz<br>
                        December, 2016<br>
                        ";
        
                        $results["status"] = "OK";
                        $results["message"] = $about;
                    break;
        
                    case "about":
                        $about = "I aspire for a challenging position as a Lead Web Developer in a leading corporation, where I can use my technical and business skills to achieve the organization's objectives. I have experience leading, designing and programming websites with HTML5, CSS3, jQuery, JavaScript and PHP, using agile methodologies.";
        
                        $results["status"] = "OK";
                        $results["message"] = $about;
                    break;
        
                    case "experience":
                        $experience = "
                        <b>PHP Developer – Terra</b><br>
                        Julio 2020 – Actual<br><br>
        
                        Responsibilities<br>
                        <ul>
                        <li>Analize, design, plan and develop new modules for the company goals focused in the RRHH administration like employees, assignment of assets and cars management.</li>
                        <li>Re-engineering and designing of an ERP for the logistics and inventory of the materials for the correct flow from the acquisition of materials to the installation for the clients.</li>
                        </ul>
                        <br><br>
        
        
                        <b>Lead Developer – Solfine</b><br>
                        Julio 2016 – Julio 2020<br><br>
        
                        Responsibilities<br>
                        <ul>
                            <li>My role is to fix all bugs that exist with the purpose of improving the operation; I also made new implementations to facilitate new tasks, and scripts that fix all the misinformation that was saved with the wrong calculations in this payroll system.</li>
                            <li>As a Project Manager in the second project my responsibility was to plannify, execute and close an ERP Project (“Solfine” a real estate administration system) where I managed teams and managed expectations aligning the project to business goals.</li>
                            <li>As a Project Manager in the third Project my responsibility was to plannify, execute an ERP (Payment Project) where I managed teams and tasks and administration of the resources reaching the goals with success. I acted as the lead developer and fullstack.</li>
                        </ul><br><br>
        
                        <b>Python Developer – Divox</b><br>
                        Junio 2018 – Octubre 2018<br><br>
        
                        Responsibilities:
                        <ul>
                            <li>As a Fullstack Developer, I developed the modules of the internal systems (Web and Mobile applications) respecting all the requirements and rules of the process and creating an excellent implementation and functionality.</li>
                        </ul><br><br>
        
                        <b>PHP Developer – Televisa</b></br>
                        Octubre 2015 – Julio 2016<br><br>
        
                        Responsibilities:<br>
                        <ul>
                            <li>My main responsibility was to create modules or cruds for news on the main website of the company. They had to be global or general so they can be used in other websites not only the main.</li>
                            <li>I have created modules with JSP in AEM CQ5 CMS, that were integrated in different projects. I was working in conjunction with other teams like Design and Backend using their resources to reach the planned objectives, fulfilling the goals in time, and QA.</li>
                        </ul>
                        ";
        
                        $results["status"] = "OK";
                        $results["message"] = $experience;
                    break;
        
                    case "projects":
                        $projects = "
                        <b>Projects as Independent Consultor</b><br>
                        <ul>
                        <li><a href='https://visagroup.mx/' target='_blank'>https://visagroup.mx/  (CMS)</a></li>
                        <li><a href='http://uribebrickpavingco.com/' target='_blank'>http://uribebrickpavingco.com/ (Website)</a></li>
                        <li><a href='https://bonanit.com.mx/' target='_blank'>https://bonanit.com.mx/ (Website)</a></li>
                        <li><a href='http://rapidomaravatio.com/' target='_blank'>http://rapidomaravatio.com/ (App Android y Website)</a></li>
                        <li><a href='http://ismsantacecilia.com/' target='_blank'>http://ismsantacecilia.com/ (Website)</a></li>
                        <li><a href='http://radioterapia.org.mx/' target='_blank'>http://radioterapia.org.mx/ (Website)</a></li>
                        <li><a href='https://ilmaestrouniforms.com/' target='_blank'>https://ilmaestrouniforms.com/ (ecommerce)</li>
                        <li><a href='http://transportesexpresso.com/' target='_blank'>http://transportesexpresso.com/ (Website y Administrador ERP)</a></li>
                        <li><a href='http://www.herraline.com.mx/' target='_blank'>http://www.herraline.com.mx/ (Catálogo en línea)</a></li>
                        <li>CUCITEC (Revista online)*</li>
                        <li>ENDOPERIO (ERP Clínica Dental)*</li>
                        <li>Moreliato (Revista online)*</li>
                        <li>AlMedical y MedicalPharm (Sistema de alertas sanitarias e inventario de medicamentos)</li>
                        <li>UNEDEPROM (Revista online)*</li>
                        <li>Exavall (Website)*</li>
                        </ul>
                        ";
        
                        $results["status"] = "OK";
                        $results["message"] = $projects;
                    break;
            
                    default:
                        $results["status"] = "Error";
                        $results["message"] = "<a class='text-danger'>Command not found. Try cv --help</a>";
                    break;
                }
            }else{
                $results["status"] = "Error";
                $results["message"] = "<a class='text-danger'>Command not found. Try cv --help.</a>";
            }
        break;

        case "php":
            $results["status"] = "OK";
            $results["message"] = "";
        break;

        default:
            $results["status"] = "Error";
            $results["message"] = "<a class='text-danger'>Command not found. Try cv --help.</a>";
        break;
    }
    
    

    echo json_encode($results);

?>
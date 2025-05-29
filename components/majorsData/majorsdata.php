<?php
#Types
#ba = business administration
#c = computing
#foe = Faculty of Engineering
#ls = life sciences
#bs = basic sciences


$GLOBALS['programs'] = array(
    'bachelors'=>array(
        // Business administration
        array("
        ba
        ",
"
#
","
        Bachelors of Business Administration
        ", "
        Higher Secondary School Certificate or Equivalent securing at least 45% marks in aggregate, as per HEC requirement <br> MAJU Admission Test/HEC Test
        ","
        ./bba.php
        "),
        array("
        ba
        ",
"
#
","
        BS ACCOUNTING AND FINANCE","Higher Secondary School Certificate or Equivalent securing at least 45% marks in aggregate, as per HEC requirement <br> MAJU Admission Test/HEC Test
        ","
        ./bsaf.php
        "),
        // Computing Programs
        array("
        c
        ",
"
#
","
        BS Computer Science",
        "
        Inter or FSC/ICS/A-Level with Maths or equivalent securing at least 50% marks in aggregate & MAJU Admission Test or HEC Approved Test.
        ","
        ./bsaf.php
        "),
        array("
        c
        ",
"
#
","
        BS Software Engineering",
        "
        Inter or FSC/ICS/A-Level with Maths or equivalent securing at least 50% marks in aggregate & MAJU Admission Test or HEC Approved Test.
        ","
        ./bscs.php
        "),
        // Engineering Program
        array("
        foe
        ",
"
#
","
        BE Computer Systems Engineering
        ","
        Higher Secondary School Certificate or A-levels or Equivalent with Physics, Mathematics and Chemistry securing at least 60% marks in aggregate or IBCC equivalence. or Diploma of Associate Engineer Examination in relevant discipline securing at least 70% aggregate marks.
        ","
        ./becs.php
        "),
        array("
        foe
        ",
"
#
","
        BE Electrical Engineering
        ","
        Higher Secondary School Certificate or A-levels or Equivalent with Physics, Mathematics and Chemistry securing at least 60% marks in aggregate or IBCC equivalence. or Diploma of Associate Engineer Examination in relevant discipline securing at least 70% aggregate marks.
        ","
        ./beee.php
        "),
        // Life Sciences 
        array("
        ls
        ",
"
#
","
        BS Bio-Sciences
        ","
        Minimum 45% marks in HSC (Pre-medical or Pre-engineering) or equivalent. or 
        Minimum 45% marks in B.Sc. (with Biology subjects) or Equivalent qualification.
        Student with B.Sc. degree will be provided admission in BS Biosciences (3rd year). However, each student would have to attempt deficiency courses (from Semester I to IV) which will be decided by the concerned department.
        ","
        ./beee.php
        "),
        array("
        bs
        ",
"
#
","
        BS Bio-Chemistry","Minimum 45% marks in HSC (Science group) or equivalent & MAJU admission test
        ","
        ./bsbc.php
        "),
        array("
        ls
        ",
"
#
","
        BS Bio-Techonology
        ","

        Minimum 45% marks in HSC (Science group) or equivalent<br>
            Student with B.Sc. degree will be provided admission in BS Biotechnology (3rd year). However, each student would have to attempt deficiency courses (from Semester I to IV) which will be decided by the concerned department.
        ","
        ./bsbt.php
        "),
        // BASIC SCIENCES
        array("
        bs
        ",
"
#
","
        B.Ed Education",
        "
        14 Years education with at least Second Division from a University recognized by HEC
        ","
        ./bed.php
        "),
        array("
        ls
        ",
"
#
","
        BS Education",
        "
        12 Years education with at least 45% in annual system.
        ","
        ./bsed.php
        "),
        array("
        bs
        ",
"
#
","
        BS English",
        "
        12 Years education with at least 45%in annual system.
        ","
        bseng.php
        "),
        array("
        bs
        ",
"
#
","
        BS Psychology",
        "
        Higher Secondary School Certificate or Equivalent securing at least 45% marks in aggregate, as per HEC requirement.
        ","
        ./bsp.php
        "),
        array("
        bs
        ",
"
#
","
        BS Echonomics","12 Years education or Equivalent securing at least 45% in annual
        ","
        ./bse.php
        ")

    ),

    'masters'=> array(
        // Business administration
        array("
        ba
        ",
"
#
","
        MBA
        ","
        14/16 years of relevant business education or equivalent securing at least 50% marks in aggregate.
        ","
        ./mbs.php
        "),
        
        array("
        ba
        ",
"
#
","
        MS MANAGEMENT SCIENCE",
        "
        14/16 years of relevant business education or equivalent securing at least 50% marks in aggregate.
        ","
        ./msms.php
        "),

        // Computing Programs

        array("
        c
        ",
"
#
","
        MS Computer Science
        ",
        "
        A minimum of 16 years of education leading to BS in Computer Science/ Information Technology/ Software Engineering or equivalent <br> Minimum 2.00/4.00 CGPA or 50% marks
        ","
        ./mscs.php
        "),

        array("
        c
        ",
"
#
","
        MS Software Engineering
        ",
        "
        A minimum of 16 years of education leading to BS in Computer Science/ Information Technology/ Software Engineering or equivalent <br> Minimum 2.00/4.00 CGPA or 50% marks
        ","
        ./msse.php
        "),

        // Engineering Programs

        array("
        foe
        ",
"
#
","
        MS Electrical Engineering
        ",
        "
        16 years relevant qualification like BE / B-Tech (Hons.) / BS (4 years in relevant discipline) or any other equivalent qualification with at least 2.0 CGPA or equivalent
        ","
        ./msee.php
        "),

        // Life Science
        array("
        ls
        ",
"
#
","
        MS BIOTECHNOLOGY
        ",
        "
        16 years relevant qualification like BE / B-Tech (Hons.) / BS (4 years in relevant discipline) or any other equivalent qualification with at least 2.0 CGPA or equivalent        
        ","
        ./msbt.php
        "),
        array("
        ls
        ",
"
#
","
        MS BIOINFORMATICS
        ",
        "
        16 years relevant qualification like BE / B-Tech (Hons.) / BS (4 years in relevant discipline) or any other equivalent qualification with at least 2.0 CGPA or equivalent
        ","
        ./msbi.phP
        "),
        // Basic Science
    ),
    'phd'=>array(
       


        array("
        ba
        ",
"
#
","
        Ph.D Management Sciences
        ",
        "
        Successful completion of 18 years education (MBA/MS/M.Phil) in relevant discipline with minimum CGPA 3.0 out of 4.0
        ","
        ./phdms.php
        "),
        array("
        c
        ",
"
#
","
        Ph.D COMPUTER SCIENCE
        ",
        "
        MS degree in relevant discipline. Relevancy shall be established by the Graduate Admission Committee.
        ","
        ./phdcs.php
        "),
        array("
        foe
        ",
"
#
","
        Ph.D ElECTRICAL ENGINEERING
        ",
        "
        MS degree in relevant discipline.
        ","
        ./phdee.php
        "),
    )
    );



    // All these functions return programs from array
    function getBachelorsPrograms(){
        return $GLOBALS['programs']['bachelors'];
    }
    function getMastersPrograms(){
        return $GLOBALS['programs']['masters'];
    }
    function getPhdPrograms(){
        return $GLOBALS['programs']['phd'];
    }
    
    function getPrograms($type, $array){
        
        $programName=0;
        if($type == 1){
            $programName = 'ba';
        }elseif($type == 2){
            $programName = 'c';
        }elseif($type == 3){
            $programName = 'foe';
        }elseif($type == 4){
            $programName = 'ls';
        }elseif($type == 5){
            $programName = 'bs';
        }
        $result = array();
            foreach ($array as $key => $value) {
                if(trim($programName) == trim($value[0])){
                   array_push($result,$value);
                }    
            }
        return $result;
    }
?>
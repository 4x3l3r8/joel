var facultySet = {};
        facultySet["Pure and Applied Science"] = ["Computer Science", "Biochemistry", "Microbiology"];
        facultySet["Arts"] = ["English", "Religious Studies", "Theatre Arts"];

        function changeDepartment() {
            var faculty = document.getElementById("faculty");
            var department = document.getElementById("department");

            var d = faculty.options[faculty.selectedIndex].value;

            while (department.options.length) {
                department.remove(0);
            }

            var depts = facultySet[d];
           if (depts) {
               department.disabled = false;
               for (let i = 0; i < depts.length; i++) {
                   var dept = new Option(depts[i],i);
                   department.options.add(dept);
               }
           }else{
            department.disabled = true;
           }
        }
const validation = new JustValidate("#signup");

validation
    .addField("#name",[
        {
            rule: "required"
        }
    ])
    .addField("#Email",[
        {
            rule: "required"
        },
        {
            rule:"email"
        },
       /* {
            validator: (value) => () =>{
                return fetch("validate-email.php?email=" + encodeURIComponent(value)).then(function(response){
                    return response.json();
                }) 
                .then(function(json){
                    return json.available;
                });
            },
            errorMessage:"You already signup using this email" 
        }
        */



    ])

    .addField("#Password",[
        {
            rule: "required"
        },
        {
            rule:"password"
        }
    ])
    .addField("#password_confirmation",[
       
        {
            validator: (value,fields) =>{
                return value === fields["#Password"].elem.value;
            },
            errorMessage:"Password Should Match"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("signup").submit();
    })
    
    ;
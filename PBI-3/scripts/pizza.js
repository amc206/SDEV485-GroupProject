document.getElementById("pizza-form").onsubmit = validate;

function validate()
{
    //alert("Hello!");

    clearErrors();

    //Flag variable to track if the form is valid
    let valid = true;

    //Validate First Name
    let first = document.getElementById("fname").value;
    //alert("You typed " + first);
    if(first == "")
    {
        document.getElementById("err-fname").style.display = "block";
        valid = false;
    }

    //Validate last name
    let last = document.getElementById("lname").value;
    if(last == "")
    {
        document.getElementById("err-lname").style.display = "block";
        valid = false;
    }

    //Validate method: pickup or delivery
    let methodButtons = document.getElementsByName("method");
    let methodIsChecked = false;
    for (let i = 0; i < methodButtons.length; i++)
    {
        if(methodButtons[i].checked)
        {
            methodIsChecked = true;
        }
    }
    if(!methodIsChecked)
    {
        document.getElementById("err-method").style.display = "block";
        valid = false;
    }

    //Validate Toppings -- TRY ON OWN <------------
    let toppings = document.getElementsByName("toppings[]");
    let countToppings = 0;
    for (let i = 0; i < toppings.length; i++)
    {
        if (toppings[i].checked)
        {
            countToppings++
        }
    }
    if (countToppings < 1)
    {
        document.getElementById("err-toppings").style.display = "block";
        valid = true;
    }

    //Validate Size
    let size = document.getElementById("size").value;
    //alert(size);
    if(size == "none")
    {
        document.getElementById("err-size").style.display = "block";
        valid = false;
    }

    //Return false if any errors were found
    return valid;
}

//Clear all error messages
function clearErrors()
{
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++)
    {
        errors[i].style.display = "none";
    }
}
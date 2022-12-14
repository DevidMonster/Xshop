//delete
const logger = document.querySelector(".logger");
const accpet = document.querySelector(".Confirm");
const dontAccept = document.querySelector(".noConfirm");
const id = document.querySelector(".idItem");

//detail-product
const increase = document.querySelector(".increase")
const decrease = document.querySelector(".decrease")
const count = document.querySelector(".count")
const form = document.querySelectorAll(".form-change-comment");
const titleComment = document.getElementById("title_Comment")

//detail-person
const changeName = document.querySelector("#change-name")
const changeEmail = document.querySelector("#change-email")
const submit = document.querySelector(".form-info .submit")
const fullName = document.querySelector("#name")
const email = document.querySelector("#email")
const emailStorage = document.querySelector("#emailStorage")
const nameStorage = document.querySelector("#nameStorage")


//statistical
const chart = document.getElementById("chart")
const btn_view = document.getElementById("view-chart")

function show(button) {
    add(button);
    logger.classList.add("show")
    console.log('success')
}

function hide() {
    logger.classList.remove("show")
}


function add(button) {
    const div = document.querySelector(".onClick");
    if(id) {
        var iD = id.value
    } else {
        var iD = 0
    }
    if(div) {
        div.innerHTML = " ";
        div.innerHTML += `<button class="noConfirm" onClick="hide()">No</button>
        <a href="../../controller/${button.className}.php?id=${button.id}&idItem=${iD}" class="Confirm"><button>Yes</button></a>`;
    }
}

if(increase) {
    increase.addEventListener('click', ()=>{
        count.value = parseInt(count.value) + 1;
    })
    console.log(count.value)
}

if(decrease) {
    decrease.addEventListener('click', ()=>{
        if(parseInt(count.value) > 1) {
            count.value = parseInt(count.value) - 1;
        }
    })
}




console.log(submit)
if(fullName) {
    let bool = true;
    changeName.addEventListener('click', () => {
        if(bool) {
            fullName.disabled = false;
            changeName.innerText = "H???y"
            bool = false
        } else {
            fullName.disabled = true;
            changeName.innerText = "Thay ?????i"
            bool = true
            fullName.value = nameStorage.value;
            submit.disabled = true;
        }
    })
}

if(email) {
    let bool = true;
    changeEmail.addEventListener('click', () => {
        if(bool) {
            email.disabled = false;
            changeEmail.innerText = "H???y"
            bool = false
        } else {
            email.disabled = true;
            changeEmail.innerText = "Thay ?????i"
            bool = true
            email.value = emailStorage.value;
            submit.disabled = true;
        }
    })
}

if(submit) {
    submit.addEventListener('click', () => {
        fullName.disabled = false;
        email.disabled = false;
    })
}

console.log(changeName)
function disabledFalse() {
    submit.disabled = false;
}

if(count) {
    let bool = true
    function change(button, index) {
        if(bool) {
            button.innerText = "H???y"
            console.log(form)
            form[index].style.display = "block";
            titleComment.style.display="none";
            bool = false
        } else {
            button.innerText = "Thay ?????i"
            form[index].style.display = "none";
            titleComment.style.display="block";
            bool = true
        }
    }
}

if(chart) {
    let bool = true;
    btn_view.addEventListener('click', () => {
        if(bool) {
            chart.classList.remove("hide-chart")
            chart.classList.add("show-chart");
            bool = false;
        } else {
            chart.classList.remove("show-chart")
            chart.classList.add("hide-chart")
            bool = true
        }
    })
}

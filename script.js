let buttons = document.querySelectorAll("button")
buttons.forEach(el => {
    el.addEventListener("click",async  e => {
        e.preventDefault()
        let formData = new FormData();
        formData.append(el.name,'')
        switch (el.name) {
            case "auth":
                formData.append('login', document.querySelector("#auth-login").value)
                formData.append('password', document.querySelector("#auth-password").value)
                break;
            case "reg":
                formData.append('login', document.querySelector("#reg-login").value)
                formData.append('password', document.querySelector("#reg-password").value)
                break;
            case "rec":
                formData.append('password', document.querySelector("#rec-password").value)
                formData.append('new-password', document.querySelector("#rec-new-password").value)
                break;
        }
        let request =  await fetch("functions.php", {
            method: "POST",
            body: formData,
            });
            alert(await request.text())
    })
})
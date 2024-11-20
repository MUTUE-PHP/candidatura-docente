<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portal de Candidatura Docente</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* CSS */

        body {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .text-white {
            color: white;
        }

        .icon {
            color: #1F2058;
            padding: 20px;
            background-color: rgba(217, 217, 217, .5);
            border-radius: 50%;
            font-size: 20px;
        }

        .register {
            color: #eaeaea;
            font-size: 20px;
            margin-left: 10px;
            font-weight: 500;
        }

        #register {
            text-decoration: none;
        }

        .btn-form {
            margin-top: 30px;
        }

        .icon:hover {
            background-color: #fff;
        }



        /* Progress Bar CSS */

        .progressbar {
            position: relative;
            display: flex;
            justify-content: space-between;
            /* background-color: red; */
            counter-reset: step;
            margin: 4rem 0;
        }

        .progressbar::before,
        .progress {
            content: " ";
            position: absolute;
            width: 100%;
            height: 4px;
            background-color: #dcdcdc;
            top: 50%;
        }

        .progress {
            background-color: rgb(31, 32, 88);
            width: 0%;
        }

        .progress-step {
            width: 40px;
            height: 40px;
            background-color: #dcdcdc;
            border-radius: 50%;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .progress-step::before {
            counter-increment: step;
            content: counter(step);
        }

        .progress-step::after {
            content: attr(data-title);
            position: absolute;
            top: calc(100% + 0.5rem);
            font-size: 0.85rem;
            color: #666;
            text-align: center;
        }

        .progress-step-active {
            background-color: rgb(31, 32, 88);
            color: white;
        }

        .form-step {
            display: none;
        }

        .form-step-active {
            display: block;
        }

        /* END CSS */

        /* Estilos personalizados para replicar o layout da imagem */
        .custom-input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        /* Label fixa no topo */
        .custom-input-group label {
            position: absolute;
            top: -10px;
            /* Posição ajustada para ficar na borda superior */
            left: 12px;
            font-size: 0.875rem;
            color: #4c3d91;
            /* Cor roxa */
            background-color: #fff;
            padding: 0 5px;
            z-index: 1;
        }

        /* Input e select */
        .custom-input-group input,
        .custom-input-group select {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
        }

        /* Placeholder interno */
        .custom-input-group input::placeholder,
        .custom-input-group select::placeholder {
            color: #999;
            font-size: 0.875rem;
        }

        /* Select específico */
        .custom-input-group select {
            appearance: none;
            /* Remove a seta padrão */
            background: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"%3E%3Cpath fill="%23999" d="M5.516 7.548a.625.625 0 01.884.004L10 11.229l3.6-3.677a.625.625 0 01.887.88l-4.043 4.125a.625.625 0 01-.887 0L5.516 8.428a.625.625 0 010-.88z"%3E%3C/path%3E%3C/svg%3E') no-repeat right 12px center;
            background-color: #fff;
            background-size: 14px;
        }
    </style>

</head>

<body style="background-image: url({{ asset('bg-overlay.svg') }});">
    <div id="app"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        
document.addEventListener("DOMContentLoaded", () => {

const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;


nextBtns.forEach(btn => {
    btn.addEventListener("click", (event) => {
        event.preventDefault();
        formStepsNum++;
        updateFormStep();
        updateProgressBar();
    })
});

prevBtns.forEach(btn => {
    btn.addEventListener("click", (event) => {
        event.preventDefault();
        formStepsNum--;
        updateFormStep();
        updateProgressBar();
    })
});

function updateFormStep() {
    formSteps.forEach(form => {
        form.classList.contains('form-step-active') && form.classList.remove(
            'form-step-active');
    })

    formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressBar() {
    progressSteps.forEach((progressStep, idx) => {
        if (idx < formStepsNum + 1) {
            progressStep.classList.add('progress-step-active');
        } else {
            progressStep.classList.remove('progress-step-active');
        }
    })

    const progressActive = document.querySelectorAll(".progress-step-active");

    progress.style.width = ((progressActive.length - 1) / (progressSteps.length - 1) * 100 + "%");

}

});
    </script>
</body>

</html>

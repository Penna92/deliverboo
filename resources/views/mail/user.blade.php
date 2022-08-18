<div class="container d-flex">
    <div class="up">
        <h1 class="text-center title">Hai ricevuto un ordine!</h1>
        <h3 class="text-center">Muoviti e cucina!</h3>
        <div class="line"></div> 
    </div>
    <a href="http://127.0.0.1:8000/admin/orders/" class="mb-5"><button class="btn">Controlla i tuoi ordini</button></a>  
    <p class="m-0">Il team di Deliverboo</p>
</div>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<style>
    .container {
        width: 80%;
        margin: 5rem auto;
    }

    .d-flex {
        display: flex;
        flex-flow: column nowrap;
        align-items: center;
    }
    .title {
        color: #005c53;
    }

    .text-center {
        text-align: center;
    }

    .btn {
        padding: 1rem;
        border: none;
        border-radius: 0.3rem;
        background-color: #005c53;
        color: white;
    }

    .line {
        width: 80%;
        margin: 3rem auto;
        height: 3px;
        border-radius: 5px;
        background-color: #042940;
    }
</style>
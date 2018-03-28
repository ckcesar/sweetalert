<html>

<head>
    <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style type="text/css">
        body {
            font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
            font-weight: 400;
        }
    </style>

</head>

<body>

<h1>Clique para salvar</h1>
<input type="button" value="Salvar" onclick="salvar();" />

<script>
    function salvar(){
        swal({
            title: "Deseja salvar?",
            text: "",
            icon: "warning",
            buttons: [
                'Não',
                'Sim'
            ],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                swal({
                    title: 'Salvo com sucesso!',
                    text: '',
                    icon: 'success'
                }).then(function() {
                    form.submit();
                });
            }else {
                //swal("Cancelado", "", "error");
            }
        });
    }
</script>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<body style="color: #000000;">
<p>
    <img src="{{url('img/home/logo_acesso.png')}}">

</p>

        <h4 style="text-align: center;">Senha cadastrada com sucesso!</h4>
        <p>Prezado(a) <?php echo $data['name'];?>, segue abaixo senha cadastrada para acesso ao sistema: </p>
        <p><b><?php echo $data['password'];?></b></p>

        <p>Com a senha cadastrada o candidato consegue visualizar e executar todas suas atividades administrativas relacionadas às suas inscrições,
            <br/> Boa Prova!</p>
</body>
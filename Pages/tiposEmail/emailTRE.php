<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    $mail->IsSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );  
    try {
        $chamado = $_POST['chamado'];
        $zona = $_POST['zona'];
        $mail->Host = '192.168.254.15';
        $mail->Port = 25;
        $mail->SMTPSecure = "tls";
        $mail->SMTPAuth = false;
        $mail->Username = "suporte4";  
        $mail->CharSet = 'UTF-8';
        $mail->From = "suporte4@tscom.com.br";
        $mail->FromName = "Pablo Correa";
        $mail->SetFrom("suporte4@tscom.com.br", "Pablo Correa");
        $mail->addAddress("pablo.correa.nr@gmail.com");
        // $mail->AddAddress('helpdesk@tre-rs.jus.br');
        // $email = "zon".$zona."@tre-rs.jus.br";
        // $mail->AddAddress($email);
        $mail->addCC('suporte4@tscom.com.br');
        
        if ($zona == 1) $zona =	'Porto Alegre';
        if ($zona == 2) $zona =	'Porto Alegre';
        if ($zona == 3) $zona =	'Gaurama';
        if ($zona == 4) $zona =	'Espumoso';
        if ($zona == 5) $zona =	'Alegrete';
        if ($zona == 6) $zona =	'Antônio Prado';
        if ($zona == 7) $zona =	'Bagé';
        if ($zona == 8) $zona =	'Bento Gonçalves';
        if ($zona == 9) $zona =	'Caçapava Do Sul';
        if ($zona == 10) $zona = 'Cachoeira Do Sul';
        if ($zona == 11) $zona = 'São Sebastião Do Caí';
        if ($zona == 12) $zona = 'Camaquã';
        if ($zona == 13) $zona = 'Candelária';
        if ($zona == 14) $zona = 'Canguçu';
        if ($zona == 15) $zona = 'Carazinho';
        if ($zona == 16) $zona = 'Caxias Do Sul';
        if ($zona == 17) $zona = 'Cruz Alta';
        if ($zona == 18) $zona = 'Dom Pedrito';
        if ($zona == 19) $zona = 'Encruzilhada Do Sul';
        if ($zona == 20) $zona = 'Erechim';
        if ($zona == 21) $zona = 'Estrela';
        if ($zona == 22) $zona = 'Guaporé';
        if ($zona == 23) $zona = 'Ijuí';
        if ($zona == 24) $zona = 'Itaqui';
        if ($zona == 25) $zona = 'Jaguarão';
        if ($zona == 26) $zona = 'Jaguari';
        if ($zona == 27) $zona = 'Júlio De Castilhos';
        if ($zona == 28) $zona = 'Lagoa Vermelha';
        if ($zona == 29) $zona = 'Lajeado';
        if ($zona == 30) $zona = 'Santana Do Livramento';
        if ($zona == 31) $zona = 'Montenegro';
        if ($zona == 32) $zona = 'Palmeira Das Missões';
        if ($zona == 33) $zona = 'Passo Fundo';
        if ($zona == 34) $zona = 'Pelotas';
        if ($zona == 35) $zona = 'Pinheiro Machado';
        if ($zona == 36) $zona = 'Quaraí';
        if ($zona == 37) $zona = 'Rio Grande';
        if ($zona == 38) $zona = 'Rio Pardo';
        if ($zona == 39) $zona = 'Rosário Do Sul';
        if ($zona == 40) $zona = 'Santa Cruz Do Sul';
        if ($zona == 41) $zona = 'Santa Maria';
        if ($zona == 42) $zona = 'Santa Rosa';
        if ($zona == 43) $zona = 'Santa Vitória Do Palmar';
        if ($zona == 44) $zona = 'Santiago';
        if ($zona == 45) $zona = 'Santo Ângelo';
        if ($zona == 46) $zona = 'Santo Antônio Da Patrulha';
        if ($zona == 47) $zona = 'São Borja';
        if ($zona == 48) $zona = 'São Francisco De Paula';
        if ($zona == 49) $zona = 'São Gabriel';
        if ($zona == 50) $zona = 'São Jerônimo';
        if ($zona == 51) $zona = 'São Leopoldo';
        if ($zona == 52) $zona = 'São Luiz Gonzaga';
        if ($zona == 53) $zona = 'Sobradinho';
        if ($zona == 54) $zona = 'Soledade';
        if ($zona == 55) $zona = 'Taquara';
        if ($zona == 56) $zona = 'Taquari';
        if ($zona == 57) $zona = 'Uruguaiana';
        if ($zona == 58) $zona = 'Vacaria';
        if ($zona == 59) $zona = 'Viamão';
        if ($zona == 60) $zona = 'Pelotas';
        if ($zona == 61) $zona = 'Farroupilha';
        if ($zona == 62) $zona = 'Marau';
        if ($zona == 63) $zona = 'Bom Jesus';
        if ($zona == 64) $zona = 'Rodeio Bonito';
        if ($zona == 65) $zona = 'Canela';
        if ($zona == 66) $zona = 'Canoas';
        if ($zona == 67) $zona = 'Encantado';
        if ($zona == 68) $zona = 'Flores Da Cunha';
        if ($zona == 69) $zona = 'São Vicente Do Sul';
        if ($zona == 70) $zona = 'Getúlio Vargas';
        if ($zona == 71) $zona = 'Gravataí';
        if ($zona == 72) $zona = 'Viamão';
        if ($zona == 73) $zona = 'São Leopoldo';
        if ($zona == 74) $zona = 'Alvorada';
        if ($zona == 75) $zona = 'Nova Prata';
        if ($zona == 76) $zona = 'Novo Hamburgo';
        if ($zona == 77) $zona = 'Osório';
        if ($zona == 78) $zona = 'Piratini';
        if ($zona == 79) $zona = 'São Francisco De Assis';
        if ($zona == 80) $zona = 'São Lourenço Do Sul';
        if ($zona == 81) $zona = 'São Pedro Do Sul';
        if ($zona == 82) $zona = 'São Sepé';
        if ($zona == 83) $zona = 'Sarandi';
        if ($zona == 84) $zona = 'Tapes';
        if ($zona == 85) $zona = 'Torres';
        if ($zona == 86) $zona = 'Três Passos';
        if ($zona == 87) $zona = 'Tupanciretã';
        if ($zona == 88) $zona = 'Veranópolis';
        if ($zona == 89) $zona = 'Três De Maio';
        if ($zona == 90) $zona = 'Guaíba';
        if ($zona == 91) $zona = 'Crissiumal';
        if ($zona == 92) $zona = 'Arroio Grande';
        if ($zona == 93) $zona = 'Venâncio Aires';
        if ($zona == 94) $zona = 'Frederico Westphalen';
        if ($zona == 95) $zona = 'Sananduva';
        if ($zona == 96) $zona = 'Cerro Largo';
        if ($zona == 97) $zona = 'Esteio';
        if ($zona == 98) $zona = 'Garibaldi';
        if ($zona == 99) $zona = 'Nonoai';
        if ($zona == 100) $zona = 'Tapejara';
        if ($zona == 101) $zona = 'Tenente Portela';
        if ($zona == 102) $zona = 'Santo Cristo';
        if ($zona == 103) $zona = 'São José Do Ouro';
        if ($zona == 104) $zona = 'Arroio Do Meio';
        if ($zona == 105) $zona = 'Campo Bom';
        if ($zona == 106) $zona = 'Gramado';
        if ($zona == 107) $zona = 'Santo Augusto';
        if ($zona == 108) $zona = 'Sapucaia Do Sul';
        if ($zona == 110) $zona = 'Tramandaí';
        if ($zona == 111) $zona = 'Porto Alegre';
        if ($zona == 112) $zona = 'Porto Alegre';
        if ($zona == 113) $zona = 'Porto Alegre';
        if ($zona == 114) $zona = 'Porto Alegre';
        if ($zona == 115) $zona = 'Panambi';
        if ($zona == 116) $zona = 'Butiá';
        if ($zona == 117) $zona = 'Não-Me-Toque';
        if ($zona == 118) $zona = 'Estância Velha';
        if ($zona == 119) $zona = 'Faxinal Do Soturno';
        if ($zona == 120) $zona = 'Horizontina';
        if ($zona == 121) $zona = 'Ibirubá';
        if ($zona == 122) $zona = 'Mostardas';
        if ($zona == 123) $zona = 'Pedro Osório';
        if ($zona == 124) $zona = 'Alvorada';
        if ($zona == 125) $zona = 'Teutônia';
        if ($zona == 127) $zona = 'Giruá';
        if ($zona == 128) $zona = 'Passo Fundo';
        if ($zona == 129) $zona = 'Nova Petrópolis';
        if ($zona == 130) $zona = 'São José Do Norte';
        if ($zona == 131) $zona = 'Sapiranga';
        if ($zona == 132) $zona = 'Seberi';
        if ($zona == 133) $zona = 'Triunfo';
        if ($zona == 134) $zona = 'Canoas';
        if ($zona == 135) $zona = 'Santa Maria';
        if ($zona == 136) $zona = 'Caxias Do Sul';
        if ($zona == 137) $zona = 'São Marcos';
        if ($zona == 138) $zona = 'Casca';
        if ($zona == 140) $zona = 'Coronel Bicaco';
        if ($zona == 141) $zona = 'Santo Antônio Das Missões';
        if ($zona == 142) $zona = 'Bagé';
        if ($zona == 143) $zona = 'Cachoeirinha';
        if ($zona == 144) $zona = 'Planalto';
        if ($zona == 145) $zona = 'Arvorezinha';
        if ($zona == 146) $zona = 'Constantina';
        if ($zona == 148) $zona = 'Erechim';
        if ($zona == 149) $zona = 'Igrejinha';
        if ($zona == 150) $zona = 'Capão Da Canoa';
        if ($zona == 151) $zona = 'Barra Do Ribeiro';
        if ($zona == 152) $zona = 'Carlos Barbosa';
        if ($zona == 153) $zona = 'Dois Irmãos';
        if ($zona == 154) $zona = 'Arroio Do Tigre';
        if ($zona == 155) $zona = 'Augusto Pestana';
        if ($zona == 156) $zona = 'Palmares Do Sul';
        if ($zona == 157) $zona = 'Restinga Sêca';
        if ($zona == 158) $zona = 'Porto Alegre';
        if ($zona == 159) $zona = 'Porto Alegre';
        if ($zona == 160) $zona = 'Porto Alegre';
        if ($zona == 161) $zona = 'Porto Alegre';
        if ($zona == 162) $zona = 'Santa Cruz Do Sul';
        if ($zona == 163) $zona = 'Rio Grande';
        if ($zona == 164) $zona = 'Pelotas';
        if ($zona == 165) $zona = 'Feliz';
        if ($zona == 166) $zona = 'Campina Das Missões';
        if ($zona == 168) $zona = 'São Valentim';
        if ($zona == 169) $zona = 'Caxias Do Sul';
        if ($zona == 172) $zona = 'Novo Hamburgo';
        if ($zona == 173) $zona = 'Gravataí';

        $mail->AddEmbeddedImage('assinatura.png', 'assinatura');
        $mail->Subject = "Unidade inoperante - TRE de $zona.";
        $mail->isHTML(true); 
        

        $mail->Body = "
            <body lang=PT-BR link='#0563C1' vlink='#954F72' style='word-wrap:break-word'>
                <div class=WordSection1>
                    <p>Boa tarde,</p>
                    <p>Constatamos através de nosso sistema de monitoramento, que a Unidade TRE de " . $zona . " está inoperante em nosso sistema.</p>
                    <p>Tentamos contato por telefone, mas não obtivemos sucesso. Para que possamos dar continuidade ao nosso atendimento, gostaríamos de saber se há energia elétrica no local ou se os equipamentos foram desligados.</p>     
                    <p>De qualquer forma registramos um chamado em nosso sistema, protocolo $chamado.</p>
                    <p>A consulta deste chamado pode ser feita através do telefone (51) 3039-8305, diretamente com nosso suporte ou, através do e-mail suporte@tscom.com.br.</p>
                    <span style='mso-fareast-language:PT-BR'>
                        Atenciosamente,
                    </span>
                    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=625 style='width:468.75pt;'>
                        <tr style='height:34.4pt'>
                        <td width=348 valign=top style='width:261.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.4pt'>
                            <img width=350 height=160 style='width:3.6458in;height:1.6666in' id='Imagem_x0020_2' src='cid:assinatura'>
                        </td>
                        <td width=248 valign=top style='width:186.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.4pt'>
                            
                            <span style='margin:0px;font-size:12.0pt;color:#404040;mso-fareast-language:PT-BR'>
                                Pablo Conte</span>
                            <p>
                                <p style='margin: 0px;'>
                                    <span style='margin:0px;font-size:9.0pt;color:#404040;mso-fareast-language:PT-BR'>
                                        (51) 3039-8300 R. 54<o:p></o:p>
                                    </span>
                                </p>
                                <p style='margin: 0px;'>
                                    <span style='margin:0px;font-size:9.0pt;color:#404040;mso-fareast-language:PT-BR'>
                                        (51) 3500 0240 Ramal: 54<o:p></o:p>
                                    </span>
                                </p>
                                <p style='margin: 0px;'>
                                    <span style='margin:0px;font-size:9.0pt;color:#404040;mso-fareast-language:PT-BR'>
                                        Whatsapp Suporte: (51) 9371-2763
                                    </span>
                                </p>
                            </p>
                            
                            <p class=MsoNormal>
                                <span style='font-size:10.0pt;font-family:'Arial',sans-serif;mso-fareast-language:PT-BR'>
                                    <a href='mailto:suporte4@tscom.com.br'>
                                <span style='margin:0px;color:#0563C1'>
                                    suporte4@tscom.com.br
                                </span></a><br>
                                <a href='http://www.tscom.com.br/'>
                                <span style='margin:0px;color:#0563C1'>
                                    www.tscom.com.br
                                </span></a><br>
                                    <a href='http://www.tsenergy.com.br/'>
                                <span style='margin:0px;color:#0563C1'>
                                    www.tsenergy.com.br
                                </span></a></span>
                                </table>
                                <p class=MsoNormal>
                                <span style='mso-fareast-language:PT-BR'>
                                    <o:p>&nbsp;</o:p>
                                </span></p>
                                </div>
                                </body>";


































        $mail->Password = "";
















        $mail->Send();
        header("Location: http://localhost/envioDeEmails/Pages/envioEmailTRE.php");

    } catch (phpmailerException $e) {
        $result = $e->errorMessage();
    }
    
?>
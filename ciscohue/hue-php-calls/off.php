<?php
header('Content-Type: text/xml');
header('Connection: close');
?>
<CiscoIPPhoneText>
<Title> Off</Title>
<Prompt/>
<Text><?php echo htmlspecialchars(`/var/www/html/ciscohue/off`, ENT_XML1); ?></Text>
</CiscoIPPhoneText>

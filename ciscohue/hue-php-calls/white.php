<?php
header('Content-Type: text/xml');
header('Connection: close');
?>
<CiscoIPPhoneText>
<Title> On</Title>
<Prompt/>
<Text><?php echo htmlspecialchars(`/var/www/html/white`, ENT_XML1); ?></Text>
</CiscoIPPhoneText>

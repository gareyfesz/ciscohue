<?php
header('Content-Type: text/xml');
header('Connection: close');
?>
<CiscoIPPhoneText>
<Title> Off</Title>
<Prompt/>
<Text><?php echo htmlspecialchars(`/usr/ciscohue/off`, ENT_XML1); ?></Text>
</CiscoIPPhoneText>

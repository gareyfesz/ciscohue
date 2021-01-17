<?php
header('Content-Type: text/xml');
header('Connection: close');
?>
<CiscoIPPhoneText>
<Title>Garey Off</Title>
<Prompt/>
<Text><?php echo htmlspecialchars(`/usr/cwa/gareyoff`, ENT_XML1); ?></Text>
</CiscoIPPhoneText>

<?php
header('Content-Type: text/xml');
header('Connection: close');
?>
<CiscoIPPhoneText>
<Title>Garey On</Title>
<Prompt/>
<Text><?php echo htmlspecialchars(`/usr/cwa/gareydim`, ENT_XML1); ?></Text>
</CiscoIPPhoneText>

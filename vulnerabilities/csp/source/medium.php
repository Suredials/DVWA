<?php

$headerCSP = "Content-Security-Policy: default-src 'self'; script-src 'self'; object-src 'none'; base-uri 'self';";

header($headerCSP);

# <script nonce="TmV2ZXIgZ29pbmcgdG8gZ2l2ZSB5b3UgdXA=">alert(1)</script>

?>
<?php
$page[ 'body' ] .= '
<form name="csp" method="POST">
	<p>Inline script inclusion is disabled.</p>
</form>
';

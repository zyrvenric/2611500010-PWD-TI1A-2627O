<?php
function bersihkanInput($teks) {
	return htmlspecialchars($teks ?? "", ENT_QUOTES, "UTF-8");
}
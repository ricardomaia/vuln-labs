<?php
session_destroy();
header("Location: ?page=home&logout=true");

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<title> </title>
</head>

<body>

</body>

</html>

<script src="https://unpkg.com/vue@3"></script>

<div id="app">{{ message }}</div>

<script>
	const {
		createApp
	} = Vue

	createApp({
		data() {
			return {
				message: 'Hello Vue!'
			}
		}
	}).mount('#app')
</script>
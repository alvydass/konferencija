function showLoading() {
    console.log("LABAAAS");
    document.getElementById('loadingScreen').style.display = 'flex';
    setTimeout(function () {
        document.getElementById('loadingScreen').style.display = 'none';
    }, 1500);
}

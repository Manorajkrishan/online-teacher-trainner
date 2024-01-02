function increaseStatus(index)
{
const progressBars = document.querySelectorAll('.status');
const progressBar = progressBars[index];
let currentWidth = progressBar.style.width || '0%';
let currentPercentage = parseInt(currentWidth);

if (currentPercentage < 100) {
    currentPercentage += 10; // Increase by 10% (change as needed)
    progressBar.style.width = currentPercentage + '%';
}
}
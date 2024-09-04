document.addEventListener('DOMContentLoaded', async () => {
    const markdownContainer = document.getElementById('markdown-content');

    try {
        // Проверьте, что библиотека загружена и доступна
        if (typeof marked.parse !== 'function') {
            throw new Error('Библиотека marked не доступна или функция parse не найдена');
        }

        const url = "https://raw.githubusercontent.com/AxelProgrammer/development/main/README.md";
        const response = await fetch(url);

        // Проверяем, успешен ли запрос
        if (!response.ok) {
            throw new Error('Ошибка сети: ' + response.statusText);
        }

        const markdown = await response.text();
        const htmlContent = marked.parse(markdown);  // Преобразуем Markdown в HTML
        markdownContainer.innerHTML = htmlContent;
    } catch (error) {
        markdownContainer.innerHTML = 'Ошибка при загрузке файла: ' + error.message;
        console.error('Ошибка при загрузке файла:', error);
    }
});

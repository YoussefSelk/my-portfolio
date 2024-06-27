// github-render.js

const renderGitHubProjects = (repositories) => {
    const projectsContainer = document.getElementById("github-projects");

    repositories.forEach((repo) => {
        const card = document.createElement("div");
        card.classList.add(
            "bg-gray-800",
            "rounded-lg",
            "overflow-hidden",
            "shadow-lg",
            "mb-4"
        );

        // Check if repo.languages is defined
        const languages = repo.languages
            ? Object.keys(repo.languages).join(", ")
            : "N/A";

        card.innerHTML = `
            <div class="p-4">
                <h3 class="text-lg font-semibold text-orange-300 mb-2">${
                    repo.name
                }</h3>
                <p class="text-sm text-gray-400 mb-2">${
                    repo.description || "No description provided"
                }</p>
                <p class="text-sm text-gray-400 mb-2"><span class="font-bold">Languages:</span> ${languages}</p>
                <a href="${
                    repo.html_url
                }" target="_blank" class="text-blue-500 hover:underline">View Project</a>
            </div>
        `;

        projectsContainer.appendChild(card);
    });
};

export default renderGitHubProjects;

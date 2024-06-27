// main.js

import fetchGitHubProjects from "./API/getReposGithub.js";
import renderGitHubProjects from "./github-render.js";

document.addEventListener("DOMContentLoaded", () => {
    const username = "YoussefSelk"; // Replace with your GitHub username

    fetchGitHubProjects(username)
        .then((repositories) => {
            renderGitHubProjects(repositories);
        })
        .catch((error) => {
            console.error("Failed to fetch GitHub projects:", error);
        });
});

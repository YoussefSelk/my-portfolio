// github-api.js

const fetchGitHubProjects = async () => {
    try {
        const response = await fetch(
            "https://api.github.com/users/YoussefSelk/repos?sort=created&direction=asc"
        );
        if (!response.ok) {
            throw new Error("Failed to fetch GitHub repositories");
        }
        const data = await response.json();

        // Map each repository to include languages
        const repositories = await Promise.all(
            data.map(async (repo) => {
                const languagesResponse = await fetch(repo.languages_url);
                if (!languagesResponse.ok) {
                    throw new Error(
                        `Failed to fetch languages for ${repo.name}`
                    );
                }
                const languagesData = await languagesResponse.json();
                return {
                    name: repo.name,
                    description: repo.description,
                    html_url: repo.html_url,
                    languages: languagesData,
                };
            })
        );

        return repositories;
    } catch (error) {
        console.error("Error fetching GitHub projects:", error);
        return [];
    }
};

export default fetchGitHubProjects;

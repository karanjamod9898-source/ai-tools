// Tool data is kept in a plain JSON-style array so it can be replaced by an API later.
const tools = [
  {
    name: "WriteFlow",
    category: "Writing",
    description: "Draft blog posts, emails, ad copy, and briefs with reusable brand voice settings.",
    pricing: "Freemium",
    featured: true,
    url: "#"
  },
  {
    name: "PromptPage",
    category: "Writing",
    description: "Organize prompts, reusable templates, and team-approved writing workflows.",
    pricing: "Free",
    featured: false,
    url: "#"
  },
  {
    name: "PixelForge",
    category: "Image",
    description: "Create product mockups, social visuals, and concept art from short prompts.",
    pricing: "Paid",
    featured: true,
    url: "#"
  },
  {
    name: "StudioCanvas",
    category: "Image",
    description: "Edit images with AI background removal, generative fill, and batch exports.",
    pricing: "Freemium",
    featured: false,
    url: "#"
  },
  {
    name: "MotionPilot",
    category: "Video",
    description: "Generate short videos, captions, hooks, and visual scenes for campaign launches.",
    pricing: "Paid",
    featured: true,
    url: "#"
  },
  {
    name: "ClipCraft",
    category: "Video",
    description: "Turn long webinars and podcasts into polished clips for every social channel.",
    pricing: "Freemium",
    featured: false,
    url: "#"
  },
  {
    name: "CodeMate",
    category: "Coding",
    description: "Ship faster with code completions, refactors, tests, and documentation support.",
    pricing: "Freemium",
    featured: true,
    url: "#"
  },
  {
    name: "DebugLens",
    category: "Coding",
    description: "Analyze stack traces, explain errors, and suggest focused fixes for developers.",
    pricing: "Free",
    featured: false,
    url: "#"
  }
];

const toolsGrid = document.querySelector("#toolsGrid");
const featuredTools = document.querySelector("#featuredTools");
const searchInput = document.querySelector("#searchInput");
const clearSearch = document.querySelector("#clearSearch");
const toolCount = document.querySelector("#toolCount");
const featuredCount = document.querySelector("#featuredCount");
const emptyState = document.querySelector("#emptyState");
const categoryFilters = document.querySelector("#categoryFilters");
const themeToggle = document.querySelector("#themeToggle");
const themeIcon = document.querySelector("#themeIcon");
const mobileMenuBtn = document.querySelector("#mobileMenuBtn");
const navLinks = document.querySelector("#navLinks");

let activeCategory = "All";

function getInitials(name) {
  return name
    .split(" ")
    .map((word) => word[0])
    .join("")
    .slice(0, 2)
    .toUpperCase();
}

function createToolCard(tool) {
  const article = document.createElement("article");
  article.className = "tool-card";
  article.innerHTML = `
    <div class="tool-top">
      <div class="tool-logo" aria-hidden="true">${getInitials(tool.name)}</div>
      <span class="badge">${tool.category}</span>
    </div>
    <h3>${tool.name}</h3>
    <p>${tool.description}</p>
    <div class="tool-meta">
      <span class="pricing">${tool.pricing}</span>
      <a class="visit-link" href="${tool.url}" aria-label="Visit ${tool.name}">Visit tool</a>
    </div>
  `;
  return article;
}

function filterTools() {
  const query = searchInput.value.trim().toLowerCase();

  return tools.filter((tool) => {
    const matchesSearch = tool.name.toLowerCase().includes(query);
    const matchesCategory = activeCategory === "All" || tool.category === activeCategory;
    return matchesSearch && matchesCategory;
  });
}

function renderTools() {
  const filteredTools = filterTools();
  const selectedFeatured = filteredTools.filter((tool) => tool.featured);

  toolsGrid.innerHTML = "";
  featuredTools.innerHTML = "";

  filteredTools.forEach((tool) => toolsGrid.appendChild(createToolCard(tool)));
  selectedFeatured.forEach((tool) => featuredTools.appendChild(createToolCard(tool)));

  toolCount.textContent = `${filteredTools.length} ${filteredTools.length === 1 ? "tool" : "tools"}`;
  featuredCount.textContent = `${selectedFeatured.length} ${selectedFeatured.length === 1 ? "tool" : "tools"}`;
  emptyState.style.display = filteredTools.length ? "none" : "block";
}

function setActiveCategory(category) {
  activeCategory = category;

  document.querySelectorAll(".filter-btn").forEach((button) => {
    button.classList.toggle("active", button.dataset.category === category);
  });

  renderTools();
}

function setTheme(theme) {
  document.body.classList.toggle("dark", theme === "dark");
  themeIcon.textContent = theme === "dark" ? "Light" : "Dark";
  localStorage.setItem("toolnest-theme", theme);
}

categoryFilters.addEventListener("click", (event) => {
  const button = event.target.closest(".filter-btn");
  if (!button) return;
  setActiveCategory(button.dataset.category);
});

searchInput.addEventListener("input", renderTools);

clearSearch.addEventListener("click", () => {
  searchInput.value = "";
  searchInput.focus();
  renderTools();
});

themeToggle.addEventListener("click", () => {
  const nextTheme = document.body.classList.contains("dark") ? "light" : "dark";
  setTheme(nextTheme);
});

mobileMenuBtn.addEventListener("click", () => {
  const isOpen = navLinks.classList.toggle("open");
  mobileMenuBtn.setAttribute("aria-expanded", String(isOpen));
});

navLinks.addEventListener("click", (event) => {
  if (event.target.matches("a")) {
    navLinks.classList.remove("open");
    mobileMenuBtn.setAttribute("aria-expanded", "false");
  }
});

document.querySelector(".newsletter-form").addEventListener("submit", (event) => {
  event.preventDefault();
  event.currentTarget.reset();
});

const savedTheme = localStorage.getItem("toolnest-theme") || "light";
setTheme(savedTheme);
renderTools();

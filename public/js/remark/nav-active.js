const tabs = document.querySelectorAll(".remark-nav ul li");
const sections = document.querySelectorAll(".remark-content");

const removeActiveTab = () => {
    tabs.forEach(tab => {
        tab.classList.remove("is-active");
    })
    sections.forEach(section => {
        section.classList.remove("is-active");
    })
}

const addActiveTab = tab => {
    tab.classList.add("is-active");

    const href = tab.querySelector("a").getAttribute("href");
    const matchingSection = document.querySelector(href);

    matchingSection.classList.add("is-active");
  }

tabs.forEach(tab => {
    tab.addEventListener("click", e => {
      e.preventDefault();
      removeActiveTab();
      addActiveTab(tab);
    });
  })
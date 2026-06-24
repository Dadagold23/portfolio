document.addEventListener("DOMContentLoaded", () => {
  const preloader = document.querySelector("[data-preloader]");
  const scrollTopButton = document.querySelector("[data-scroll-top]");
  const chatToggle = document.querySelector("[data-chat-toggle]");
  const chatWidget = document.querySelector("[data-chat-widget]");
  const chatClose = document.querySelector("[data-chat-close]");
  const chatSend = document.querySelector("[data-chat-send]");
  const chatInput = document.querySelector("[data-chat-input]");
  const chatBody = document.querySelector("[data-chat-body]");
  const filterGroup = document.querySelector("[data-filter-group]");
  const filterGrid = document.querySelector("[data-filter-grid]");
  const filterEmpty = document.querySelector("[data-filter-empty]");
  const subjectInput = document.querySelector("#subject");
  const messageInput = document.querySelector("#message");

  if (window.AOS) {
    AOS.init({
      duration: 900,
      easing: "ease-out-cubic",
      once: true,
      offset: 80
    });
  }

  window.addEventListener("load", () => {
    if (preloader) {
      preloader.classList.add("is-hidden");
    }
  });

  const toggleScrollButton = () => {
    if (!scrollTopButton) {
      return;
    }

    scrollTopButton.classList.toggle("is-visible", window.scrollY > 280);
  };

  toggleScrollButton();
  window.addEventListener("scroll", toggleScrollButton);

  if (scrollTopButton) {
    scrollTopButton.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  const responses = [
    {
      match: ["hello", "hi", "hey"],
      text: "Hello. You can ask about services, featured projects, experience, or how to start a collaboration."
    },
    {
      match: ["project", "portfolio", "work"],
      text: "Featured work includes retail POS, cloud integration, software architecture, e-learning, health systems, and enterprise automation solutions."
    },
    {
      match: ["service", "offer", "help"],
      text: "Core services include software engineering, systems architecture, UI modernization, workflow automation, and technical consulting."
    },
    {
      match: ["contact", "hire", "reach"],
      text: "Use the contact form to send a message directly, or connect through email, WhatsApp, LinkedIn, or GitHub from the contact section."
    },
    {
      match: ["experience", "background"],
      text: "This portfolio highlights 16+ years of delivery across enterprise software, product engineering, system design, and modernization work."
    },
    {
      match: ["ui", "design", "redesign"],
      text: "The UI direction here focuses on clearer hierarchy, stronger trust signals, smarter interactions, and better conversion flow."
    }
  ];

  const pushChatMessage = (type, text) => {
    if (!chatBody) {
      return;
    }

    const suggestions = chatBody.querySelector("[data-chat-suggestions]");
    if (suggestions) {
      suggestions.remove();
    }

    const wrapper = document.createElement("div");
    wrapper.className = `chat-message ${type}`;
    const bubble = document.createElement("span");
    bubble.textContent = text;
    wrapper.appendChild(bubble);
    chatBody.appendChild(wrapper);
    chatBody.scrollTop = chatBody.scrollHeight;
  };

  const sendChatMessage = async (customMessage = null) => {
    if (!chatInput) {
      return;
    }

    const value = customMessage !== null ? customMessage.trim() : chatInput.value.trim();
    if (!value) {
      return;
    }

    if (customMessage === null) {
      chatInput.value = "";
    }

    pushChatMessage("user", value);

    const typingIndicator = document.createElement("div");
    typingIndicator.className = "chat-message bot typing-indicator";
    const bubble = document.createElement("span");
    bubble.textContent = "Writing...";
    bubble.style.fontStyle = "italic";
    bubble.style.opacity = "0.75";
    typingIndicator.appendChild(bubble);
    chatBody.appendChild(typingIndicator);
    chatBody.scrollTop = chatBody.scrollHeight;

    try {
      const response = await fetch("chat-api.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json"
        },
        body: JSON.stringify({ message: value })
      });

      typingIndicator.remove();

      if (response.ok) {
        const data = await response.json();
        if (data.reply) {
          pushChatMessage("bot", data.reply);
        } else {
          pushChatMessage("bot", "I had trouble formulating a response. Please try again.");
        }
      } else {
        pushChatMessage("bot", "Sorry, I encountered an issue connecting to my brain. Please try again later.");
      }
    } catch (error) {
      typingIndicator.remove();
      pushChatMessage("bot", "Sorry, I am offline right now. Feel free to contact Engr. Dada directly!");
    }
  };

  if (chatBody) {
    chatBody.addEventListener("click", (event) => {
      const target = event.target;
      if (target && target.hasAttribute("data-suggestion")) {
        const suggestionText = target.getAttribute("data-suggestion");
        sendChatMessage(suggestionText);
      }
    });
  }

  if (chatToggle && chatWidget) {
    chatToggle.addEventListener("click", () => {
      chatWidget.classList.toggle("is-open");
    });
  }

  if (chatClose && chatWidget) {
    chatClose.addEventListener("click", () => {
      chatWidget.classList.remove("is-open");
    });
  }

  if (chatSend) {
    chatSend.addEventListener("click", () => sendChatMessage());
  }

  if (chatInput) {
    chatInput.addEventListener("keydown", (event) => {
      if (event.key === "Enter") {
        event.preventDefault();
        sendChatMessage();
      }
    });
  }

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && chatWidget) {
      chatWidget.classList.remove("is-open");
    }
  });

  if (filterGroup && filterGrid) {
    const filterButtons = Array.from(filterGroup.querySelectorAll("[data-filter]"));
    const filterItems = Array.from(filterGrid.querySelectorAll("[data-filter-item]"));

    const applyFilter = (value) => {
      let visibleCount = 0;

      filterButtons.forEach((button) => {
        button.classList.toggle("is-active", button.dataset.filter === value);
      });

      filterItems.forEach((item) => {
        const matches = value === "all" || item.dataset.category === value;
        item.classList.toggle("is-hidden", !matches);
        if (matches) {
          visibleCount += 1;
        }
      });

      if (filterEmpty) {
        filterEmpty.classList.toggle("is-hidden", visibleCount > 0);
      }
    };

    filterButtons.forEach((button) => {
      button.addEventListener("click", () => {
        applyFilter(button.dataset.filter || "all");
      });
    });
  }

  document.querySelectorAll("[data-subject-preset]").forEach((button) => {
    button.addEventListener("click", () => {
      const subjectPreset = button.getAttribute("data-subject-preset") || "";
      const messagePreset = button.getAttribute("data-message-preset") || "";

      document.querySelectorAll("[data-subject-preset]").forEach((chip) => {
        chip.classList.remove("is-active");
      });

      button.classList.add("is-active");

      if (subjectInput) {
        subjectInput.value = subjectPreset;
      }

      if (messageInput && !messageInput.value.trim()) {
        messageInput.value = messagePreset;
      }

      if (subjectInput) {
        subjectInput.focus();
      }
    });
  });
});

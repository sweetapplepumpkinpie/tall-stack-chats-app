import "./bootstrap";

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";

import { initTheme } from "./toggleDark";

window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.plugin(initTheme);
Alpine.store("users", {
    profile: {
        name: "Jenny Smith",
        image: "https://randomuser.me/api/portraits/women/56.jpg",
        phone: "(025) 015-234-567",
        location: "New York, United States",
        description:
            "Fly me to the moon 🌙 If you feel like your life is a routine, step back and take a deep breath.",
        socialMedias: ["Instagram", "Linkedin", "Codepen"],
        activities: ["Biking", "Cooking", "Traveling", "Graphic design"],
    },
    current: 1,
    items: [
        {
            name: "Bessie Cooper",
            active: true,
            image: "https://randomuser.me/api/portraits/thumb/men/74.jpg",
            lastMessage:
                "Yes, I need your help with the project, it need it done by tomorrow 😫",
        },
        {
            name: "Jenny Smith",
            active: true,
            image: "https://randomuser.me/api/portraits/thumb/women/56.jpg",
            lastMessage: "Perfect, thanks !",
        },
        {
            name: "Courtney Simmons",
            active: false,
            image: "https://randomuser.me/api/portraits/thumb/women/17.jpg",
            lastMessage: "Going home soon, don't worry",
        },
        {
            name: "Martha Curtis",
            active: true,
            image: "https://randomuser.me/api/portraits/thumb/women/39.jpg",
            lastMessage: "Great 😂",
        },
        {
            name: "Gab Ryan",
            active: true,
            image: "https://randomuser.me/api/portraits/thumb/men/27.jpg",
            lastMessage: "Sure, may I get your phone number? 😃",
        },
        {
            name: "Jules Zimmermann",
            active: false,
            image: "https://randomuser.me/api/portraits/thumb/men/17.jpg",
            lastMessage: "Well, here I am, coming as faaast as I can !",
        },
        {
            name: "Mark Reid",
            active: false,
            image: "https://randomuser.me/api/portraits/thumb/men/9.jpg",
            lastMessage:
                "Have you listened to the latest album? Pure perfection",
        },
        {
            name: "Russell Williams",
            active: true,
            image: "https://randomuser.me/api/portraits/thumb/men/54.jpg",
            lastMessage: "Nice to meet you again",
        },
        {
            name: "Savannah Nguyen",
            active: true,
            image: "https://randomuser.me/api/portraits/thumb/women/85.jpg",
            lastMessage: "Really ?!",
        },
    ],
});

Alpine.store("messages", {
    items: [
        {
            content: "Perfect, thanks !",
            in: false,
            date: "2023-07-18T18:12:12.000Z",
        },
        {
            content: "Curabitur volutpat, ipsum a condimentum hendrerit ! 😊",
            in: true,
            date: "2023-07-18T18:12:12.000Z",
        },
        {
            content:
                "Nulla facilisi. Duis laoreet dignissim lectus vel maximus",
            in: true,
            date: "2023-07-17T16:12:12.000Z",
        },
        {
            content:
                "Vestibulum finibus pulvinar quam, at tempus lorem. Pellentesque justo sapien, pulvinar sed magna et, vulputate commodo nisl. Aenean pharetra ornare turpis. Pellentesque viverra blandit ullamcorper. Mauris tincidunt ac lacus vel convallis. Vestibulum id nunc nec urna accumsan dapibus quis ullamcorper massa. Aliquam erat volutpat. Nam mollis mi et arcu dapibus condimentum.",
            in: true,
            date: "2023-07-17T16:12:12.000Z",
        },
        {
            content: "Is everything alright?",
            in: false,
            date: "2023-07-17T16:12:12.000Z",
        },
        {
            content:
                "Aenean iaculis massa non lorem dignissim volutpat. Praesent id faucibus lorem, a sagittis nunc. Duis facilisis lectus vel sapien ultricies, sed placerat augue elementum. In sagittis, justo nec sodales posuere, nunc est sagittis tellus, eget scelerisque dolor risus vel augue",
            in: false,
            date: "2023-07-16T16:12:12.000Z",
        },
        {
            content: "Can't wait for it to be delivered",
            in: true,
            date: "2023-07-16T16:12:12.000Z",
        },

        {
            content: "Ohh thanks ! I was really worried about it !",
            in: true,
            date: "2023-07-16T16:12:12.000Z",
        },
        {
            content:
                "Hi! I just checked, your order went through and is on it's way home. Enjoy your new computer! 😃",
            in: false,
            date: "2023-07-15T18:12:12.000Z",
        },
        {
            content:
                "Hey, I bought something yesterdat but haven't gotten any confirmation. Do you know I if the order went through?",
            in: true,
            date: "2023-07-15T18:12:12.000Z",
        },
    ],
});

Alpine.start();

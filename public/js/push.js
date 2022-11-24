var pusher = new Pusher("5c2a998216fc62b7a507", {
    cluster: "ap1",
});

var channel = pusher.subscribe("announcement");
channel.bind("App\\Events\\PostAnnouncement", (post) => {
    if (!("Notification" in window)) {
        alert("Web Notification is not supported");
        return;
    }


    Notification.requestPermission((permission) => {
        let notification = new Notification("New Announcements", {
            body: post.title, // content for the alert
            icon: "/storage/images/favicon.ico", // optional image url
        });

        // link to page on clicking the notification
        notification.onclick = () => {
            window.open("/studentannounce");
        };
    });
});

pusher.connection.bind("connected", function () {
    console.log("Realtime is go!");
});
// const Eecho = new Echo({
//     broadcaster: 'pusher',
//     key: "5c2a998216fc62b7a507",
//     cluster: "ap1",
//     forceTLS: true
// });

// Echo.channel("announcement").listen("PostAnnouncement", (post) => {
//     if (!("Notification" in window)) {
//         alert("Web Notification is not supported");
//         return;
//     }

//     Notification.requestPermission((permission) => {
//         let notification = new Notification("New post alert!", {
//             body: post.title, // content for the alert
//             icon: "https://pusher.com/static_logos/320x320.png", // optional image url
//         });

//         // link to page on clicking the notification
//         notification.onclick = () => {
//             window.open(window.location.href);
//         };
//     });
// });

"use client";

import {
  Tab,
  Tabs,
  TabsHeader,
} from "@material-tailwind/react";

import EventContentCard from "@/components/event-content-card";


const EVENT_CONTENT = [
  {
    title: "@cilokrentcos",
    des: "RENT KOSTUM & STYLING-REPAIR WIG",
    name: "@cilokrentcos",
    link: "https://www.instagram.com/cilokrentcos?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==",
    model_toko: "Rentcos",
    img: "/logos/cilokrentcos.webp",
  }
];
const dummy_data = [
  {
    title: "Introduction to Machine Learning",
    des: "Explore the basic principles, algorithms, and applications of Machine Learning. Through hands-on exercises and practical examples, you'll develop a solid understanding of how Machine Learning powers AI-driven solutions.",
    name: "Marcell Glock",
    link: "Chief Executive, Spotify",
    model_toko: "Merch",
    img: "/image/avatar2.jpg",
  },
  {
    title: "AI in Healthcare: Revolutionizing Patient Care",
    des: "This session is a must-attend for healthcare professionals, AI enthusiasts, and anyone interested in the intersection of technology and well-being. Join us as we discuss how AI is bringing about positive changes in healthcare.",
    name: "Marcell Glock",
    link: "Chief Executive, Spotify",
    model_toko: "Workshop",
    img: "/image/avatar3.jpg",
  },
];

export function EventContent() {
  return (
    <section className="py-8 px-8 lg:py-20">
      <Tabs value="Day1" className="mb-8">
        <div className="w-full flex mb-8 flex-col items-center">
          <TabsHeader placeholder="Tab Header" className="h-12 w-72 md:w-96">
            <Tab placeholder="Tabs" value="Day1" className="font-medium">
              Featured / Trusted Store Store with AniMae
            </Tab>
          </TabsHeader>
        </div>
      </Tabs>
      <div className="mx-auto container">
        {EVENT_CONTENT.map((props, idx) => (
          
          <EventContentCard key={idx} {...props} />
          
          
        ))}
      </div>
    </section>
  );
}

export default EventContent;

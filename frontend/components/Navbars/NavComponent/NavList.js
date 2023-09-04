import React from "react";

const WhoWeAre = () => {
    return (
        <>
            <div className="mx-4">
                <div className="header-nav-item hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold">
                    <a href="about.html" className="header-nav-link">
                        Who We Are
                    </a>
                </div>
            </div>
        </>
    )
}

const Talents = () => {
    return (
        <>
            <div className="mx-4">
                <div className="header-nav-item hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold">
                    <a href="products.html" className="header-nav-link">
                        Talents
                    </a>
                </div>
            </div>
        </>
    )
}

const Events = () => {
    return (
        <>
            <div className="mx-4">
                <div className="header-nav-item hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold">
                    <a href="event.html" className="header-nav-link">
                        Events
                    </a>
                </div>
            </div>
        </>
    )
}

const Partner = () => {
    return (
        <>
            <div className="mx-4">
                <div className="header-nav-item hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold">
                    <a href="partner.html" className="header-nav-link">
                        Partners
                    </a>
                </div>
            </div>
        </>
    )
}

const Contacts = () => {
    return (
        <>
            <div className="mx-4">
                <div className="header-nav-item hover:text-blueGray-500 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold">
                    <a href="event.html" className="header-nav-link">
                        Contact Us
                    </a>
                </div>
            </div>
        </>
    )
}

export { WhoWeAre, Talents, Events, Partner, Contacts};

// export default function NavList(props) {
//     return (
//         <>
//             <div classNameName="container">
//                 <div classNameName="header-nav-item">
//                     <a href="about.html" className="header-nav-link">
//                         Who We Are
//                     </a>
//                 </div>
//                 <div className="header-nav-item">
//                     <a href="products.html" className="header-nav-link">
//                         Talents
//                     </a>
//                 </div>
//                 <div className="header-nav-item">
//                     <a href="newsroom.html" className="header-nav-link">
//                         Events
//                     </a>
//                 </div>
//                 <div className="header-nav-item">
//                     <a href="careers.html" className="header-nav-link">
//                         Partner
//                     </a>
//                 </div>
//                 <div className="header-nav-item">
//                     <a href="contact_us.html" className="header-nav-link">
//                         Contact Us
//                     </a>
//                 </div>
//             </div>
//         </>
//     );
// }

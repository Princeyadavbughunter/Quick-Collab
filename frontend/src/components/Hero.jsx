import { FaRegCalendarAlt } from "react-icons/fa";
import "./Hero.css";

const Hero = () => {
    return (
        <section className="hero-section">
            {/* Pattern Overlay (Right Half Grid) */}
            <div className="pattern-overlay"></div>

            <div className="hero-container">
                {/* Left Content Column */}
                <div className="hero-content">
                    <h1 className="hero-title">
                        #1 Top Influencer Marketing <br />
                        Agency in India
                    </h1>

                    <p className="hero-description">
                        Grynow is the best Influencer marketing agency in India
                        which provides the top influencer marketing platform to help
                        brands / visionary marketers
                    </p>

                    <button className="hero-cta-button">
                        <FaRegCalendarAlt className="btn-icon" />
                        <span>Contact Now</span>
                    </button>
                </div>

                {/* Right Image Column */}
                <div className="hero-image-wrapper">
                    <img src="/hero.png" alt="Hero Influencer Marketing" className="hero-image" />
                </div>
            </div>
        </section>
    );
};

export default Hero;

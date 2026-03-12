import React, { useState } from 'react';
import { FaWhatsapp } from 'react-icons/fa';
import './Header.css';

const Header = () => {
    const [isMenuOpen, setIsMenuOpen] = useState(false);

    const toggleMenu = () => setIsMenuOpen(!isMenuOpen);

    return (
        <div className="header-wrapper">
            <header className="modern-header">
                <div className="logo-section">
                    <div className="logo-icon">
                        <div className="diamond lime"></div>
                        <div className="diamond dark-green"></div>
                        <div className="diamond teal"></div>
                    </div>
                    <div className="brand-name">
                        <span>QUICK</span>
                        <span>COLLAB</span>
                    </div>
                </div>

                <div className={`hamburger-menu ${isMenuOpen ? 'active' : ''}`} onClick={toggleMenu}>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <nav className={`main-nav ${isMenuOpen ? 'active' : ''}`}>
                    <ul>
                        <li><a href="#about" onClick={() => setIsMenuOpen(false)}>About</a></li>
                        <li><a href="#service" onClick={() => setIsMenuOpen(false)}>Service</a></li>
                        <li><a href="#work" onClick={() => setIsMenuOpen(false)}>Our Work</a></li>
                        <li><a href="#creator" onClick={() => setIsMenuOpen(false)}>Join as Creator</a></li>
                    </ul>
                    <div className="cta-section">
                        <a href="#chat" className="cta-button" onClick={() => setIsMenuOpen(false)}>
                            <FaWhatsapp className="whatsapp-icon" />
                            Chat Now
                        </a>
                    </div>
                </nav>
            </header>
        </div>
    );
};

export default Header;

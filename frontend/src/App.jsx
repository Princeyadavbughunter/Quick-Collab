import Header from './components/Header';
import Hero from './components/Hero';
import Company from './components/Company';
import Abc from './components/abc';
import Service from './components/Service';
import MeetExpert from './components/MeetExpert';
import EnquirySection from './components/EnquirySection';
import OurCreators from './components/creators';
import FAQSection from './components/FAQSection';
import Footer from './components/Footer';

function App() {
  return (
    <div style={{ display: 'flex', flexDirection: 'column', width: '100%', minHeight: '100vh', backgroundColor: '#fff' }}>
      {/* Hero & Header Section with Gradient */}
      <div style={{ background: 'linear-gradient(90deg, #0097B2 0%, #7ED957 100%)', width: '100%' }}>
        <Header />
        <Hero />
        <Company />
      </div>

      {/* Main Content Sections */}
      <main style={{ width: '100%', backgroundColor: '#fff' }}>
        <Abc />
        <Service />
        <MeetExpert />
        <EnquirySection />
        <OurCreators />
        <FAQSection />
        <Footer />
      </main>
    </div>
  );
}

export default App;

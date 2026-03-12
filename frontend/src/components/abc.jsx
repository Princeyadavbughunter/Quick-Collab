import React from "react";

const phases = [
    {
        id: "01",
        color: "#1a5c52",
        text: "Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.",
    },
    {
        id: "02",
        color: "#2bbfaa",
        text: "Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.",
    },
    {
        id: "03",
        color: "#c8d832",
        text: "Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.",
    },
];

export default function Abc() {
    return (
        <>
            {/* Google Font */}
            <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap');
        * { font-family: 'Open Sans', sans-serif; box-sizing: border-box; }

        .abc-section {
          padding: 80px 24px;
          background-color: #fff;
          display: flex;
          justify-content: center;
          --arrow-height: 72px;
          --arrow-tip: 25px;
          --arrow-overlap: -20px;
          --arrow-font: 18px;
          --side-padding: 40px;
        }

        .abc-container {
          width: 100%;
          maxWidth: 1400px;
          display: flex;
          align-items: flex-start;
          justify-content: space-between;
          gap: 60px;
          flex-wrap: wrap;
        }

        .abc-left {
          flex: 0 1 450px;
        }

        .abc-right {
          flex: 1 1 600px;
          min-width: 300px;
        }

        .phase-main {
           height: var(--arrow-height);
           clip-path: polygon(0 0, calc(100% - var(--arrow-tip)) 0, 100% 50%, calc(100% - var(--arrow-tip)) 100%, 0 100%, var(--arrow-tip) 50%);
           display: flex;
           align-items: center;
           justify-content: center;
           width: 100%;
        }

        .phase-span {
          font-size: var(--arrow-font);
          padding-right: var(--arrow-tip);
        }

        @media (max-width: 900px) {
          .abc-section { 
            padding: 40px 20px;
            --arrow-height: 50px;
            --arrow-tip: 15px;
            --arrow-overlap: -12px;
            --arrow-font: 13px;
            --side-padding: 25px;
          }
          .abc-container { flex-direction: column; gap: 40px; }
          .abc-left { flex: 1 1 auto; width: 100%; text-align: center; }
          .abc-left div { display: flex; flex-direction: column; align-items: center; }
          .abc-right { width: 100%; }
          .phase-arrows { flex-direction: row !important; gap: 2px !important; }
          .phase-text-row { flex-direction: column; gap: 15px; text-align: center; }
        }
      `}</style>

            <div className="abc-section">
                <div className="abc-container">

                    {/* Left: Heading + Description */}
                    <div className="abc-left">
                        <div className="heading-wrapper" style={{ marginBottom: "32px" }}>
                            <p style={{ margin: 0, fontSize: "36px", fontWeight: "400", color: "#1a3c34", lineHeight: 1.1, fontFamily: "'Open Sauce One', sans-serif" }}>
                                How QuickCollab
                            </p>
                            <p style={{ margin: 0, fontSize: "44px", fontWeight: "800", color: "#1a3c34", lineHeight: 1.1, fontFamily: "'Open Sauce One', sans-serif" }}>
                                Helps Brands?
                            </p>
                        </div>
                        <p style={{ fontSize: "18px", color: "#2bbfaa", lineHeight: "1.6", margin: 0, fontWeight: "500" }}>
                            Leveraging the talents of professional social media influencers and content creators, our influencer marketing experts collaborate
                        </p>
                    </div>

                    {/* Right: Phase Arrows */}
                    <div className="abc-right">
                        {/* Arrow Row */}
                        <div className="phase-arrows" style={{ display: "flex", alignItems: "center", marginBottom: "32px", gap: "2px" }}>
                            {phases.map((phase, index) => (
                                <div key={phase.id} style={{ display: "flex", alignItems: "center", flex: 1 }}>
                                    {/* Arrow shape */}
                                    <div style={{ position: "relative", flex: 1, height: "var(--arrow-height)", display: "flex", alignItems: "center" }}>
                                        {/* Main body */}
                                        <div
                                            className="phase-main"
                                            style={{
                                                backgroundColor: phase.color,
                                                marginLeft: index === 0 ? "0" : "var(--arrow-overlap)",
                                                zIndex: phases.length - index,
                                            }}
                                        >
                                            <span
                                                className="phase-span"
                                                style={{
                                                    color: "#fff",
                                                    fontWeight: "800",
                                                    letterSpacing: "0.5px",
                                                    paddingLeft: index === 0 ? "calc(var(--side-padding) / 2)" : "var(--side-padding)",
                                                    textAlign: "center"
                                                }}
                                            >
                                                Phase {phase.id}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            ))}
                        </div>

                        {/* Text Row */}
                        <div className="phase-text-row" style={{ display: "flex", gap: "32px" }}>
                            {phases.map((phase) => (
                                <div key={phase.id} style={{ flex: 1 }}>
                                    <p style={{ fontSize: "16px", color: "#555", lineHeight: "1.6", margin: 0, fontWeight: "400" }}>
                                        {phase.text}
                                    </p>
                                </div>
                            ))}
                        </div>
                    </div>

                </div>
            </div>
        </>
    );
}
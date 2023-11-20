
  // jvectormap data
  var visitorsData = {
  'US': 398, //USA
}

// jvectormap highlight states
var highlighted_states = {
  al  : '#0033A1',
  az  : '#0033A1',
  ar  : '#0033A1',
  ca  : '#0033A1',
  co  : '#0033A1',
  ct  : '#0033A1',
  de  : '#0033A1',
  fl  : '#0033A1',
  ga  : '#0033A1',
  hi  : '#0033A1',
  il  : '#0033A1',
  id  : '#0033A1',
  in  : '#0033A1',
  ks  : '#0033A1',
  ky  : '#0033A1',
  la  : '#0033A1',
  md  : '#0033A1',
  me  : '#0033A1',
  mi  : '#0033A1',
  mn  : '#0033A1',
  mo  : '#0033A1',
  mt  : '#0033A1',
  ne  : '#0033A1',
  nh  : '#0033A1',
  nm  : '#0033A1',
  nv  : '#0033A1',
  nj  : '#0033A1',
  nc  : '#0033A1',
  oh  : '#0033A1',
  ok  : '#0033A1',
  or  : '#0033A1',
  pa  : '#0033A1',
  sc  : '#0033A1',
  tn  : '#0033A1',
  tx  : '#0033A1',
  ut  : '#0033A1',
  va  : '#0033A1',
  vt  : '#0033A1',
  wa  : '#0033A1',
  wi  : '#0033A1',
  wy  : '#0033A1',
}

var unhighlighted_states = 
  '';

// World map by jvectormap
$('#world-map').vectorMap({
  map              : 'usa_en',
  backgroundColor  : 'transparent',
  color            : '#B1B3B3',
  colors           : highlighted_states,
  hoverColor       : '#323E48',
  selectedColor    : '#8AB7E9',
  regionStyle      : {
    initial: {
      fill            : 'rgba(171, 35, 40, 0.7)',
      'fill-opacity'  : 1,
      stroke          : 'rgba(255,255,255,.2)',
      'stroke-width'  : 1,
      'stroke-opacity': 1
    }
  },
  series           : {
    regions: [{
      values           : visitorsData,
      scale            : ['#ffffff', '#0154ad'],
      normalizeFunction: 'polynomial'
    }]
  },

  // Show state licenses
  onLabelShow: function(event, label, code){ 
    // if(!highlighted_states.hasOwnProperty(code)){
    //   event.preventDefault(); // Hides non-licensed states
    // }
    // State licenses
    if(code== 'al') {
      label.append(`<br><br>
      Alabama Consumer Credit License #22078`);
    }
    if(code== 'az') {
      label.append(`<br><br>
      Arizona Collection Agency License #1008769<br>
      Arizona Escrow Agent License #1008770`);
    }
    if(code== 'ar') {
        label.append(`<br><br>
        Arkansas Combination Mortgage Banker-Broker-Servicer License #109106`);
      }
    if(code== 'ca') {
      label.append(`
      <br>
      <br>
      Licensed under Division of Business Oversight Under the California
      <br> 
      Residential Mortgage Lending Act License# 41DBO-74196
      <br>
      <br>
      Department of Real Estate (DRE) ID #: 01799059 
      <br>
      <br>
      Finance Lenders Law License (DBO) ID #: 60DBO94450`);
    }
    if(code== 'co') {
      label.append(`
      <br>
      <br>
      Colorado Mortgage Company Registration ML-144549`);
    }
    if(code== 'ct') {
      label.append(`
      <br>
      <br>
      Connecticut Mortgage Lender License# ML-144549`);
    }
    if(code== 'de') {
        label.append(`
        <br>
        <br>
        Delaware Lender License #020322`);
      }
    if(code== 'fl') {
      label.append(`
      <br>
      <br>
      Florida Mortgage Lender Servicer License #MLD523`);
    }
    if(code== 'ga') {
      label.append(`
      <br>
      <br>
      Georgia Mortgage Lender License/Registration #23462`);
    }
    if(code== 'hi') {
      label.append(`
      <br>
      <br>
      Mortgage Loan Originator Company Lic. # HI-144549
      <br>
      <br>
      Mortgage Servicer Lic. # MS300
      <br>
      <br>
      Citadel Servicing Corporation dba Acra Lending is licensed in Hawaii as both a Mortgage Loan<br>
      Originator Company (Lic. # MS300). Consumers wishing to contact the Hawaii Division of Financial<br>
      Institutions or file a complaint against a mortgage loan origination company or mortgage<br>
      servicer can reach the Division using the following methods. <u>Via mail</u>: Department of<br>
      Commerce and Consumer Affairs, Division of Financial Institutions, P.O. Box 2054, Honolulu,<br>
      HI 96805. <u>Via in person or courier</u>: Department of Commerce and Consumer Affairs, Division<br>
      of Financial Institutions, 335 Merchant Street, Room 221; Honolulu, HI 96813. <br>
      <u>Via email</u>: <a href="mailto:dfi@dcca.hawaii.gov>dif@dcca.hawaii.gov</a><br>
      <u>Via telphone</u>: 808-586-2820.`);
    }
    if(code== 'il') {
      label.append(`<br><br>
      Illinois Residential Mortgage License #MB.6761204
      <br>
      <br>
      Licensed by the Department of Financial and Professional Regulation, 
      <br>
      Mortgage Banking Division, James R. Thompson Center, 
      <br>
      IDFPR-Residential Mortgage Banking
      <br>
      <br>
      100 W. Randolph, 9th Floor,
      <br>
      Chicago, Illinois, 60601
      <br>
      Tel: (844) 768-1713`);
    }
    if(code== 'id') {
      label.append(``);
    }
    if(code== 'in') {
      label.append(`
      <br>
      <br>
      Indiana Mortgage Lending License #30531`);
    }
    if(code== 'ks') {
        label.append(`
        <br>
        <br>
        Kansas Mortgage Company License #MC.0025274`);
      }
    if(code== 'ky') {
    label.append(`
    <br>
    <br>
    Kentucky Mortgage Company License #MC327787`);
    }
    if(code== 'la') {
        label.append(`
        <br>
        <br>
        Louisiana Residential Mortgage Lending Licensed`);
        }
    if(code== 'md') {
      label.append(`
      <br>
      <br>
      Maryland Mortgage Lender License #18483`);
    }
    if(code== 'me') {
        label.append(`
        <br>
        <br>
        Maine Supervised Lender License #144549`);
        }
    if(code== 'mi') {
      label.append(`
      <br>
      <br>
      Michigan 1st Mortgage Broker/Lender/Servicer License #FL00206854`);
    }
    if(code== 'mn') {
      label.append(`
      <br>
      <br>
      Minnesota Residential Mortgage Originator License #MN-MO-144549`);
    }
    if(code== 'mo') {
      label.append(`
      <br>
      <br>
      Missouri - Mortgage Company License - #21-2557-S`);
    }
    if(code== 'mt') {
      label.append(`
      <br>
      <br>
      Montana Mortgage Lender License #144549`);
    }
    if(code== 'ne') {
      label.append(`
      <br>
      <br>
      Nebraska Mortgage Broker License #L-160722`);
    }
    if(code== 'nh') {
    label.append(`
        <br>
        <br>
        New Hampshire Mortgage Banker License #21139-MB`);
    }
    if(code== 'nm') {
      label.append(`
          <br>
          <br>
          New Mexico Mortgage Loan Company Lic. (No #)`);
      }
    if(code== 'nv') {
    label.append(`
        <br>
        <br>
        Nevada Supplemental Mortgage Servicer License #4414`);
    }
    if(code== 'nj') {
      label.append(`
      <br>
      <br>
      New Jersey Residential Mortgage Lender License #L-160722
      <br>
      <br>
      Licensed by the N.J. Department of Banking and Insurance`);
    }
    if(code== 'nc') {
      label.append(`
      <br>
      <br>
      Montana Mortgage Lender License #144549`);
    }
    if(code== 'oh') {
      label.append(`
      <br>
      <br>
      Ohio Residential Mortgage Lending Act (RMLA) – License# RM.804651.000`);
    }
    if(code== 'ok') {
      label.append(`
      <br>
      <br>
      Oklahoma Mortgage Lender License #MLO10720`);
    }
    if(code== 'or') {
      label.append(`
      <br>
      <br>
      Oregon Mortgage Lending License #ML-5599`);
    }
    if(code== 'pa') {
      label.append(`
      <br>
      <br>
      Pennsylvania Mortgage Lending License #51804`);
    }
    if(code== 'sc') {
      label.append(`
      <br>
      <br>
      South Carolina Mortgage Lender/Servicer License #MLS-144549`);
    }
    if(code== 'tn') {
      label.append(`
      <br>
      <br>
      Tennessee Mortgage License #125315`);
    }
    if(code== 'tx') {
      label.append(`
      <br>
      <br>
      SML Mortgage Company License and SML Residential Mortgage Loan Servicer Registration
      <br>
      <br>
      Consumers wishing to file a complaint against a mortgage banker or a licensed mortgage 
      <br>
      banker residential mortgage loan originator should complete and send a complaint form to the <br>
      Texas Department of Savings and Mortgage Lending, 
      <br>2601 North Lamar, Suite 201, Austin, Texas 78705. 
      <br>
      Complaint forms and instructions may be obtained from the department’s website at www.sml.texas.gov. 
      <br>
      A toll-free consumer hotline is available at 1-877-276-5550.
      <br>
      <br>
      The department maintains a recovery fund to make payments of a certain actual out of pocket damages 
      <br>
      sustained by borrowers caused by acts of licensed mortgage banker residential mortgage loan originator. 
      <br>
      A written application for reimbursement from the recovery fund must be filed with and investigated by 
      <br>
      the department prior to the payment of a claim. For more information about the recovery fund. 
      <br>
      Please consult the department’s website at www.sml.texas.gov.`);
    }
    if(code== 'ut') {
      label.append(`
      <br>
      <br>
      Utah Mortgage Entity License #6573920`);
    }
    if(code== 'va') {
      label.append(`
      <br>
      <br>
      Virginia Lender License #MC-5845
      <br>
      <br>
      D.C. Mortgage Lender License #MLB144549 and #MLO273860`);
    }
    if(code== 'vt') {
      label.append(`
      <br>
      <br>
      Vermont Lender License #6926
      <br>
      <br>
      Vermont Loan Servicer License #144549-1`);
    }
    if(code== 'wa') {
      label.append(`
      <br>
      <br>
      Washington Consumer Loan Company License #CL-144549`);
    }
    if(code== 'wi') {
      label.append(`
      & Washington, D.C.
      <br>
      <br>
      Wisconsin Mortgage Banker License #144549BA`);
    }
    if(code== 'wy') {
      label.append(`
      <br>
      <br>
      Wyoming Supervised Lender License #3577`);
    }
  },

})
<?php 

function theAlaiaBelizeCondominiumTemplate($data = null) {
    $html = '
	<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
	   <head>
	      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	      <title>Purchase</title>
	      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	      <link rel="preconnect" href="https://fonts.gstatic.com" />
	      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet" />
	    </head>
	    <body>
	        <table border="0" cellpadding="0" cellspacing="0" style="">
		        <tr>
		            <td>
		               <table style="width:100%; padding-bottom:40px;" >
		                  <tr>
		                     <td align="center">
								<div style="margin-bottom: 25px;">
		                        PURCHASE AND SALE AGREEMENT <br />
		                        ALAIA, AUTOGRAPH COLLECTION<br />
		                        (CONDOMINIUM UNIT)
								</div>
		                     </td>
		                  </tr>
		               </table>
		               <table style="width:100%; padding-bottom:20px;">
		                  <tr>
		                     <td width="150" align="top"><strong>PURCHASER(S):</strong></td>
		                     <td width="100">Name:</td>
		                     <td style="text-align: left;"><u style="text-align: left;"><strong>'.$data["name"].'</strong></u></td>
		                  </tr>
		                  <tr>
		                  <td width="150" align="top"></td>
		                     <td width="100">Address:</td>
		                     <td style="text-align: left;"><u style="text-align: left;"><strong>'.$data["address"].'</strong></u></td>
		                  </tr>
		               </table>
		               <table style="width:100%; padding-bottom:30px;">
		                  <tr>
		                     <td width="150" align="top"></td>
		                     <td width="100" align="top">E-mail:</td>
		                     <td style="text-align: left;"><u style="text-align: left;"><strong>'.$data["email"].'</strong></u></td>
		                  </tr>
		               </table>
		               <table style="width:100%; padding-bottom:30px;">
		                  <tr align="top">
		                     <td width="150"><strong>SELLER:</strong></td>
		                     <td colspan="2"><strong>LYNX HOLDINGS LIMITED,</strong> a company organized and existing under the laws of Belize, whose address is 212 North Front Street, 3rd Floor, P.O. Box 1764, Belize City, Belize.
							</td>
		                  </tr>
		               </table>
					   <table style="width:100%;">
		                  <tr>
		                      <td>
								<div style="margin-top: 25px;">This Purchase and Sale Agreement (this <u>"Agreement"</u>) is made and entered into as of  <u><strong>'.$data["name"].'</strong></u> by and between the above-named purchaser(s) (whether singular or plural, the <u>“Purchaser”</u>) and the above-named seller (the <u>“Seller”</u>).</div>
							</td>
		                  </tr>
						  <tr>
		                      <td>
								<div style="margin-top: 30px;">
									<div><strong>1. Agreement; Property.</strong> In consideration of Ten Dollars ($10.00), the Purchaser agrees to buy and the Seller agrees to sell, subject to the matters herein provided, the following strata unit located within the Alaia, Autograph Collection (the <u>"Project"</u>) located in San Pedro Town, Belize, and more particularly described as follows:
									<br><br>Strata Unit No. <u><strong> '.$data["strata_unit"].' </strong></u> (the "<u>Strata Unit</u>"), in the Alaia, Autograph Collection as further described in Exhibit A attached hereto and as shown on the Strata Lot Plan (the "<u>Strata Plan</u>") described in the Covenants and Bylaws for the Alaia, Autograph Collection (the "<u>Declaration</u>"), which Declaration has been recorded or will be recorded prior to "Closing" (as defined below) in the official land records of the Land Registry in Belize (the "<u>Land Registry</u>"). The boundaries and approximate square footage of the Strata Unit are as described in the Declaration and depicted or described on the Strata Plan.
									</div>
									<div style="margin-top:20px"><strong>2. Purchase Price of the Strata Unit:</strong>
										<div style="margin-top: 25px;padding-left: 30px;">
											<div>2.1&nbsp; The	purchase	price	of	the	Strata	Unit	(the	"Purchase	Price")	is  <u><strong>'.$data["price_words"].'. </strong></u>(US$ <u><strong> '.number_format($data["price_number"], 2).' </strong></u>   ). All sums to be paid under this Agreement shall be paid in lawful currency of Belize in the form of cashier check, certified funds, or via wire transfer. The Purchase Price does not include closing costs described in this Agreement, or any fees or costs incurred by Purchaser in connection with any financing procured by Purchaser to complete Closing, all of which also will be payable by Purchaser. The Purchase Price consists of and shall be paid in installments by way of deposits ("Deposits"), as described in Exhibit F of this agreement.
											</div>
										</div>
									</div>
								</div>
							  </td>
		                  </tr>
		               </table>
		               <br pagebreak="true"/>
					   <table style="width:100%;">
		                  <tr>
		                     <td style="width:60% margin-bottom: 30px;"><strong><div style="margin-top: 30px;">Purchase Price:</strong></div></td>
		                     <td style="width:40%;" align="right">
		                        <div style="margin-bottom: 25px;">$ 
									<u><strong>'.number_format($data["price_number"], 2).'</strong></u>
								</div>	
		                     </td>
		                  </tr>
						  <tr>
		                     <td colspan="2"><strong style="display: block;margin-bottom: 25px;">Payment of Purchase Price (collectively, the "Deposit(s)"):</strong></td>
		                  </tr>
						  <tr>
		                     <td style="width:60%;"><strong>(a) Reservation Deposit</strong></td>
		                     <td style="width:40%;" align="right">
		                        $ <u><strong>'.number_format($data["reservation_deposit"], 2).'</strong></u>
		                     </td>
		                  </tr>
						  <tr>
		                     <td style="width:60%;">
								<div style="margin: 25px 0;">
									<strong>(b) Initial Deposit:</strong> Subject to 2.2 below, (20% of Purchase Price), due and payable on date of	this Agreement,	which shall be immediately released to Seller.
								</div>
							</td>
		                     <td style="width:40%;" align="right">
		                        <div style="margin: 25px 0;">$ 
									<u><strong>'.number_format($data["initial_deposit"], 2).'</strong></u>
								</div>
		                     </td>
		                  </tr>
						  <tr>
		                     <td style="width:60%;">
								<strong>(c) Balance of Purchase Price,</strong> due and payable at Closing:
							</td>
		                     <td style="width:40%;" align="right">
		                        <u><strong>$ '.number_format($data["balance_price"], 2).'</strong></u>
		                     </td>
		                  </tr>
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>2.2&nbsp; In the event that the Purchaser has made any Reservation Fee pursuant to a Reservation Agreement made with the Seller, such Reservation Fee shall be applied as a credit toward the Deposit.
									</div>
									<div style="margin-top: 25px;"><strong>2.3&nbsp; THE SELLER RESERVES THE RIGHT TO UTILIZE THE DEPOSITS OF THE PURCHASER FOR PAYMENT OF COSTS RELATED TO THE ACQUISITION, PLANNING, DEVELOPMENT, AND CONSTRUCTION OF THE PROJECT.</strong>
									</div>
								</div>
							</td>
						  </tr>
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>3. Closing Date and Time:</strong>
								</div>
							</td>
						  </tr>
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>3.1&nbsp; Closing on the sale and purchase of the Strata Unit (the "Closing") shall be held at the Project, or by mail, and shall be conducted by such closing agent as Seller shall specify on or before forty-five (45) days, but not less than thirty (30) days, after Purchaser receives notice from Seller that the Strata Unit is ready for occupancy and Seller is prepared to close (the "Closing Date"). Such notice from Seller shall contain the scheduled Closing Date. As of the date of this Agreement, Seller intends that the Closing shall occur on or about November 30, 2020 unless otherwise determined by the Seller and notified to the Purchaser.
									</div>
									<div style="margin-top: 25px;">3.2&nbsp; Seller shall be entitled to an extension of this deadline for the Closing Date for delays which are outside of Seller’s reasonable control, such as acts of God, inclement weather, labor or material shortages, construction delays, governmental action or inaction, riot, insurrection, acts of terrorism, or war.
									</div>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>4. Financing; Conditions of Closing:</strong>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>4.1&nbsp; Seller makes no representations as to the availability or specific terms or conditions of financing.
									</div>
									<div style="margin-top: 25px;">4.2&nbsp; Purchaser’s obligations under this Agreement are not contingent upon Purchaser’s obtaining financing for the purchase of the Strata Unit. Purchaser represents that Purchaser has the financial means to purchase the Strata Unit.
									</div>
									<div style="margin-top: 25px;">4.3&nbsp; Purchaser shall fully cooperate with Seller in procuring any evidence Seller reasonably requests that Purchaser has the financial means to pay the balance of the Purchase Price.
									</div>
									<div style="margin-top: 25px;">4.4&nbsp; Purchaser’s obligations under this Agreement are not subject to any conditions or contingencies other than recordation of the Strata Plan and substantial completion of the Strata Unit on the Closing Date, as it may be extended as provided in this Agreement.
									</div>
									<div style="margin-top: 25px;">4.5&nbsp; Purchaser’s obligations under this Agreement are expressly not subject to the sale, transfer, leasing or conveyance of any other real property.
									</div>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>5. Transfer, Title:</strong>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>5.1&nbsp; If Seller is unable to transfer good title to the Strata Unit free of all liens, judgments, mortgages, charges or other encumbrances as required by this Agreement, then Purchaser’s only remedy is to elect, at or prior to the Closing Date, to (i) take such title as Seller can transfer, without reduction in Purchase Price, or (ii) terminate this Agreement in accordance with Section 12.3 below, and in the latter event all the Deposit(s) shall be returned to Purchaser within ninety (90) days of such termination, neither party shall have any further rights, obligations or liability under this Agreement, and this Agreement shall be void except for those provisions that expressly survive this Agreement’s termination.
									</div>
									<div style="margin-top: 25px;">5.2&nbsp; At Closing, the Property shall be subject to all covenants, restrictions, conditions, easements, rights, reservations, limitations, limitations on use, architectural control committee approvals, and affirmative obligations to implement such requirements and/or pay all charges as may be set forth in or required by the Strata Plan, the Declaration, and any other design guidelines, covenants, restrictions, plats, and plans applicable to the Project. As a Proprietor (as defined in the Declaration) of the Strata  Unit, Purchaser and the Strata Unit will be subject to assessments for common expenses for the maintenance, repair, management, insurance and replacement of the Common Property in the Project, all as provided in the Declaration. Purchaser acknowledges having received copies of the Strata Plan and the Declaration, as well as all current amendments and supplements to each of the foregoing. Seller reserves the right to amend, modify and/or supplement the Strata Plan and the Declaration from time to time according to its terms, in its discretion, prior to Closing and such amendments, modifications and/or supplements shall not affect the validity of this Agreement no be a basis on which Purchaser may terminate this Agreement; provided, however, the Strata Plan will not be amended in any way that materially affects the size, shape or location of the Strata Unit. Purchaser agrees to comply with same; and, after Closing, any modifications, amendments and/or supplements to these documents will be made only as provided in the respective documents.
									</div>
									<div style="margin-top: 25px;">5.3&nbsp; The Strata Unit will be transferred to Purchaser at Closing by a requisite statutory transfer of title form (“<u><i>Transfer of Title</i></u>”) upon Seller’s receipt of the balance of the Purchase Price from Purchaser. Possession shall be delivered on the Closing Date by delivery of the Transfer of Title and keys to the Strata Unit, provided that receipt of the balance of the Purchase Price by the Seller has been confirmed.
									</div>
									<div style="margin-top: 25px;">5.4&nbsp; Purchaser and Seller agree that neither this Agreement nor any instrument making reference to this Agreement shall be recorded in the Land Registry.
									</div>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>6. Closing Costs and Apportionments:</strong>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>6.1&nbsp; The following shall be apportioned between Seller and Purchaser at Closing and as of the Closing Date: (i) real estate taxes and other lienable municipal charges (including special services district assessments and gas and water/sewer charges), based on actual charges if known or, otherwise, based on reasonable estimates thereof; and (ii) any other expenses customarily apportioned with respect to real estate in Belize.
									</div>
									<div style="margin-top: 25px;">6.2&nbsp; At Closing, Purchaser shall be responsible for: (i) recordation of any Transfer of Title at the Lands Registry (ii) payment of all recording fees for the Transfer of Title; (iii) payment of all Stamp Duty Tax required in connection with the Transfer of Title, (iv) notary fees and title company service and disbursement fees, if any, (v) any service charges by Purchaser’s real estate broker; and (vi) all charges required for the recordation of any Transfer of Title and issuance of a land certificate for the Strata Unit in the name of the Purchaser.
									</div>
									<div style="margin-top: 25px;">6.3&nbsp; At Closing, Purchaser shall pay to the Seller an amount equal to two (2) times the estimated amount of the monthly assessment for general common expenses of the Homeowners Association for the Alaia, Autograph Collection (the "<u><i>Association</i></u>") allocated to the Strata Unit, as required by the Declaration.
									</div>
									<div style="margin-top: 25px;">6.4&nbsp; Purchaser represents that it has not engaged a real estate broker, finder or agent  in connection with this transaction, and, to its knowledge, no commission, fee or other compensation is due or payable to any real estate broker, finder or agent in connection with this transaction. Purchaser shall indemnify and hold Seller harmless from and against all liability, claims, demands, damages, or costs or any kind arising from or connected with a breach of the preceding sentence.
									</div>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>7. Construction and Completion:</strong> Seller shall construct and complete the Strata Unit in substantial compliance with the Declaration and the Strata Plan (respectively, the "<u><i>Plans</i></u>"). PURCHASER ACKNOWLEDGES THE FURNISHINGS, FIXTURES, OPTIONS, EXTRAS AND OTHER AMENITIES CONTAINED IN ANY MODEL UNIT ARE NOT INCLUDED IN THE STRATA UNIT UNLESS OTHERWISE AGREED WITH THE SELLER IN WRITING.
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>7.2&nbsp; PURCHASER ACKNOWLEDGES THE STRATA UNIT AND SURROUNDING AREAS ARE DANGEROUS AREAS DURING CONSTRUCTION. VISITS BY PURCHASER DURING CONSTRUCTION ARE AT PURCHASER’S SOLE RISK. Purchaser releases and shall indemnify Seller from any loss, liability, expense (including attorneys’ fees), cost, demand, suit or cause of action resulting from any bodily injury or property damage suffered by Purchaser or any person accompanying Purchaser and persons visiting at the request or direction of Purchaser. The preceding sentence shall survive the Closing or termination of this Agreement. Purchaser may visit the Strata Unit a reasonable number of times prior to Closing but only by appointment and when accompanied by a representative of Seller; however, none of such visits shall be construed as the "Inspection" (as defined below) unless the same complies with the requirements of <u>Section 9</u> below.
									</div>
									<div style="margin-top: 25px;">7.3&nbsp; Seller will complete the improvements to the Strata Unit required by the Declaration and the Plans, but is not obligated to complete any particular improvements or common areas before the Closing Date except those necessary to provide access and utility service to the Strata Unit, and the common areas required for structural support of the Strata Unit.
									</div>
									<div style="margin-top: 25px;">7.4&nbsp; Purchaser acknowledges that at Closing, construction may be proceeding on the Common Property and other strata units and improvements within the Project, and that such construction may be occurring in locations that are proximate to the Strata Unit subject of this Agreement. Purchaser’s obligation to complete Closing in no way shall be affected or delayed by the status of construction in such other areas of the Project.
									</div>
									<div style="margin-top: 25px;">7.5&nbsp; Purchaser may not perform any work on or about the Strata Unit before completion of Closing.
									</div>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>8. Furnishings Included:</strong>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>8.1&nbsp; The Purchase Price of the Strata Unit includes all the interior furnishings, appliances, electronics, linens and housewares as required by the rental program. Each Strata unit is turn- key ready for occupancy. Interior furnishings are listed in the Furnishing Addendum attached hereto as <u>Exhibit B</u>.
									</div>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>9. Pre-Closing Inspection; Condition of Property:</strong>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>9.1&nbsp; Seller’s representative and Purchaser (or a representative duly appointed by Purchaser) will jointly inspect the Strata Unit before Closing ("<u><i>Inspection</i></u>") at a date and time scheduled by Seller by at least twenty-one (21) days’ prior notice to Purchaser.
									</div>
									<div style="margin-top: 25px;">9.2&nbsp; Purchaser acknowledges and agrees that the Strata Unit is being sold in its "as is" condition and that Seller has made no pledges, representations, warranties, covenants, or commitments, nor assumed any obligations or liabilities, in regard to any aspect of the Strata Unit or the Project which have brought about, or on which Purchaser has relied with respect to, the Purchase of the Strata Unit, except as may be expressly set forth in this Agreement, the Declaration, and the Plans. By completing Closing, Purchaser shall be deemed to have accepted the Strata Unit as being in compliance with this Agreement.
									</div>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>10.&nbsp; Risk of Loss:</strong> Seller bears the risk of loss until the Closing Date. If the Strata Unit is materially damaged before Closing, Seller may, at Seller’s option, cancel this Agreement by giving notice to Purchaser to that effect within thirty (30) days after such destruction or damage, in which event the Deposit(s) shall be refunded to Purchaser, this Agreement will be null and neither Seller nor Purchaser shall have any further rights or obligations under this Agreement except for the provisions that expressly survive its termination. Otherwise, Seller shall cause such damage to be repaired, and the Closing Date shall be extended for such a reasonable period of time as is necessary to repair the damage and substantially complete the Strata Unit.
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 30px;">
									<strong>11. Seller Warranty, Disclaimers and Limitations:</strong>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>11.1&nbsp; Seller warrants that (i) it has the authority to sell the Strata Unit to the Purchaser , (ii) it will transfer to the Purchaser good title to the Strata Unit which shall be free of all liens, judgments, mortgages, charges or other encumbrances and (iii) all materials and equipment on the Strata Unit are  new (except as expressly excepted or because of ordinary wear and tear) and of good quality, and that all work, materials, furnishings and equipment furnished will be free from failure under ordinary usage for six (6) months after Closing (the "<u><i>Seller Warranty</i></u>").
									</div>
									<div style="margin-top: 25px;">11.2&nbsp; Seller is not liable for damage to mechanical equipment or personal belongings resulting from defective conditions or the consequences thereof. The maximum liability under the Seller Warranty shall be the reasonable cost of replacement or repair of the defect or, if the defect is such that the cost to repair or replace the defective component exceeds the benefit of repair or replacement, the least of the cost to repair or the amount by which the fair market value of the Strata Unit is diminished as a direct result of the defect. Purchaser waives, and Seller is not liable for, consequential, incidental or indirect damages, or personal injuries or illness arising from any breach of the Seller Warranty or of this Agreement.
									</div>
									<div style="margin-top: 25px;">11.3&nbsp; Seller has the right to determine whether a defect shall be corrected by repair or replacement, and the manner in which such repair will be made. Seller and its designated workers and subcontractors will be afforded access to the Strata Unit during its normal business hours to inspect, assess, diagnose and repair any claimed defects, and will have a reasonable time and a reasonable number of opportunities to repair any defect.
									</div>
									<div style="margin-top: 25px;">11.4&nbsp; THE SELLER WARRANTY IS THE ONLY WARRANTY GIVEN BY SELLER CONCERNING THE STRATA UNIT AND IS GIVEN IN PLACE OF ALL OTHER WARRANTIES, EXPRESS OR IMPLIED. PURCHASER UNDERSTANDS THAT CERTAIN IMPLIED WARRANTIES MIGHT OTHERWISE APPLY TO THE STRATA UNIT. PURCHASER WAIVES ALL SUCH IMPLIED WARRANTIES, AND SELLER DISCLAIMS ALL IMPLIED WARRANTIES INCLUDING (1) ANY WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR USE, AND (2) THE IMPLIED WARRANTY OF HABITABILITY. SELLER IS  NOT LIABLE FOR PUNITIVE, CONSEQUENTIAL OR INCIDENTAL DAMAGES.
									</div>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>12. Defaults and Disputes:</strong>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>12.1&nbsp; If the Purchaser fails to make the Deposits(s) or any other payment when required under this Agreement, the amount of such unpaid Deposit(s) or any other payment shall incur interest at an annual rate the lesser of: (i) eighteen percent (18%) or (ii) the maximum rate permitted by law. The interest accrued on the unpaid Deposit(s) or on any other payment shall be immediately due and payable to Seller and shall not count towards Purchaser’s contribution to the Purchase Price.
									</div>
									<div style="margin-top: 25px;">12.2&nbsp; If the Purchaser (i) fails to make the Deposit(s) or any other payment when required under this Agreement, (ii) gives false, misleading or incomplete information to the Seller, or the Seller’s agent, concerning Purchaser’s identity or legal status or financial condition, (iii) fails to attend the Closing on the scheduled Closing Date or to complete Closing at that time, or (iv) violates or fails to fulfill and perform any other term or condition of this Agreement, then, in any such case, the Deposit(s) may be retained by the Seller (A) on account of the Purchase Price, or (B) as monies to be applied to the Seller’s damages, or (C) as liquidated damages for such breach, as Seller may elect. If Seller elects to retain the Deposit(s) as liquidated damages, then, upon actual receipt thereof by Seller, the Seller and Purchaser shall be released from all liability or obligations under this Agreement and this Agreement shall be null except for the terms of this Agreement that expressly survive its termination, and all copies will be returned to the Seller for cancellation. If Seller elects to retain the Deposit(s) as liquidated damages, and  if Purchaser fails to sign any requested release permitting Seller to retain the Deposit(s), authorizing the holder of the Deposit(s) to release it to Seller and releasing Seller from all further obligations under this Agreement within ten (10) days after Seller’s request, or if Purchaser otherwise challenges Seller’s entitlement thereto, Seller shall be entitled to recover from Purchaser all attorney’s fees and other court costs and collection expenses that Seller may incur to recover or retain the Deposit(s) with interest thereon if Seller is successful in such action.
									</div>
									<div style="margin-top: 25px;">12.3&nbsp; If Seller shall commit a material default under this Agreement before Closing which is not cured within fifteen (15) days after notice thereof is given by Purchaser to Seller, specifying the nature of such alleged default, then Purchaser’s sole and exclusive remedy shall be termination of this Agreement by giving notice thereof to Seller prior to Seller curing such default. All other rights and remedies at law or in equity are hereby expressly waived. If Purchaser elects to terminate this Agreement as provided herein, the Deposit(s) shall be returned to Purchaser, and this Agreement shall be null except for the terms of this Agreement that expressly survive its termination.
									</div>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>13. Purchaser Covenants:</strong>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>13.1&nbsp; Purchaser covenants to not use the Strata Unit in any way that would interfere with or be inconsistent with the use of one or more of the units as part of the Hotel (as defined in <u>Exhibit C</u>), including, but not limited to (i) conducting commercial activities of any kind from the Strata Unit which have not been approved in writing by the Seller, (ii) interfering with guests of the Hotel, and (iii) exceeding maximum occupancy rates per Strata Unit, which rates shall be determined by the Hotel. Purchaser shall at all times use the Strata Unit in accordance with the Declaration.
									</div>
									<div style="margin-top: 25px;">13.2&nbsp; The Strata Unit may not be divided or transferred on a time share basis or as part of any other use program or use plan except as may be allowed under the Declaration. The term “<u><i>time share</i></u>”, as used herein, shall be defined to include, but shall not be limited to, any agreement, plan, program or arrangement under which the right to use, occupy or possess the Strata Unit is divided into recurring use periods, whether fixed or determinable by reservation. A “use plan” or “use program”,  other than a time share plan, includes, but is not limited to, a plan, program or other method of use by which use of a Strata Unit rotates or is made available among various persons or entities designated by category or class, and not the general public, either for value exchanged, whether monetary or like-kind use privileges, according to a written set of rules, regulations or other guidelines. Individual rentals of strata units to the public at large otherwise permitted under the Declaration shall not be considered a time share, use plan or use program.
									</div>
									<div style="margin-top: 25px;">13.3&nbsp; Purchaser acknowledges it has been provided a copy of the disclosure information in <u>Exhibit C</u> attached hereto and agrees that the provision contained therein are hereby made a part of this Agreement.
									</div>
									<div style="margin-top: 25px;">13.4&nbsp; The Purchaser is not a Restricted Person or a Competitor (as such terms are defined in <u>Exhibit C</u> hereto).
									</div>
								</div>
							</td>
						  </tr>
						  
						   <tr>
							<td colspan="2">
								<div style="margin-top: 55px;">
									<strong>14. Use and Access Agreement:</strong> At Closing, Purchaser and Seller shall enter into a Use and Access Agreement in the form attached hereto as <u>Exhibit D ("<i>Use and Access Agreement</i>")</u>, pursuant to which Purchaser shall have the right to use the Resort Facilities (as defined therein) on the terms and conditions set forth therein. Execution of the Use and Access Agreement by Purchaser is a condition precedent to Seller’s obligation to close on the sale of the Strata Unit to Purchaser.
								</div>
								<br>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 55px;">
									<strong>15.&nbsp; Notices:</strong> All notices, demands, waivers, approvals, consents and other communications required or permitted to be given under this Agreement shall be in writing and shall be valid only if (a) personally delivered, (b) mailed by certified mail, return receipt requested, postage prepaid, (c) sent by reliable overnight courier or delivery service, charges prepaid, or (d) sent by facsimile transmission to the facsimile number of the intended recipient, or (e) sent by email. Such notices shall be addressed to the parties at their respective addresses stated in this Agreement, unless such party shall designate a different address in writing by giving the other parties at least fifteen (15) days’ prior notice of the same in the manner set forth in this <u>Section 15,</u>. All notices shall be effective (i) upon delivery, in the case of personal delivery, (ii) two (2) business days after the date of mailing, if mailed by certified mail, (iii) the scheduled date of delivery, in the case of delivery by overnight delivery service, or (iv) in the case of a facsimile notice, on the date faxed provided that such facsimile is sent and delivery electronically confirmed by 2:00 p.m., local San Pedro Town, Belize time on a business day, or otherwise on the next business day.
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>16. Miscellaneous:</strong>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>16.1&nbsp; When used in this Agreement, the singular shall include the plural, and vice versa, and the use of any gender shall include any other gender.
									</div>
									<div style="margin-top: 25px;">16.2&nbsp; Neither this Agreement nor any reference to it shall be recorded by Purchaser in any public office.
									</div>
									<div style="margin-top: 25px;">16.3&nbsp; Time is of an essence of every provision of this Agreement.
									</div>
									<div style="margin-top: 25px;">16.4&nbsp; This Agreement is governed by the laws of Belize notwithstanding any conflicts of law or choice of law principles to the contrary.
									</div>
									<div style="margin-top: 25px;">16.5&nbsp; The provisions of this Agreement shall survive the Closing and be binding upon and inure to the benefit of the heirs, personal representatives, successors, and permitted assigns of the parties.
									</div>
									<div style="margin-top: 25px;">16.6&nbsp; This Agreement may not be assigned by Purchaser without Seller’s prior, written approval.
									</div>
									<div style="margin-top: 25px;">16.7&nbsp; This Agreement is binding on and benefits the parties hereto and their respective heirs, personal representatives, successors and (to the extent permitted under this Agreement) their assigns. Except as set forth in the preceding sentence, there are no third-party beneficiaries of this Agreement, either express or implied. Purchaser may not assign its interest in this Agreement.
									</div>
									<div style="margin-top: 25px;">16.8&nbsp; Purchaser acknowledges and agrees that any future sale or transfer of the Strata Unit by Seller shall be in compliance with the terms and conditions set forth in this Agreement, including, without limitation, the condition for such transferee to enter into the Use and Access Agreement set forth in <u>Section 14</u> hereof.
									</div>
									<div style="margin-top: 25px;">16.9&nbsp; If more than one person is designated as the Purchaser in this Agreement, (i) each such person is jointly and severally liable for the obligations of Purchaser under this Agreement and (ii) Seller is entitled to rely on instructions and/or notices given by any one of such persons, and shall have the right to rely on selections made by, or change orders signed by, any one of such persons, all of which shall be binding on all persons who are the Purchaser under this Agreement.
									</div>
									<div style="margin-top: 25px;">16.10&nbsp; The execution, delivery and performance of this Agreement does not create a joint venture or partnership between Seller and Purchaser.
									</div>
									<div style="margin-top: 25px;">16.11&nbsp; This Agreement may be executed in one or more counterparts each of which  shall be an original and all of which, when taken together, shall constitute one instrument.
									</div>
									<div style="margin-top: 25px;">16.12&nbsp; Facsimile and email signatures are valid to bind each party to this Agreement.
									</div>
									<div style="margin-top: 25px;">16.13&nbsp; The captions and paragraph or section headings in this Agreement are for convenience only, and shall not be considered a part of, or deemed to affect the construction or interpretation of, any provision of this Agreement.
									</div>
									<div style="margin-top: 25px;">16.14&nbsp; This Agreement may be amended only by a written instrument signed by Purchaser and Seller. All oral agreements or alleged oral agreements shall be null and void. This Agreement, together with any addenda and exhibit(s) hereto, supersedes all prior understandings, agreements, representations and warranties between the parties concerning the Strata Unit (including, without limitation, any reservation agreement or letter of intent made between Seller and Purchaser), and is the entire agreement between them concerning the Strata Unit.
									</div>
									<div style="margin-top: 25px;">16.15&nbsp; Purchaser will look solely to the assets of the Seller as to any rights it may have against Seller under this Agreement, and hereby waives any right to assert claims against any officer, director, agent, member, manager, partner, or shareholder of Seller or of any of Seller’s subsidiaries or affiliates, and further agrees that no officer, director, agent, member, manager, partner, or shareholder of Seller or of any of Seller’s subsidiaries or affiliates has any personal liability under this Agreement.
									</div>
									<div style="margin-top: 25px;">16.16&nbsp; Should any provision of this Agreement be void or become unenforceable at law or in equity, the remaining provisions will remain in full force and effect and will not in any manner be thereby affected or impaired.
									</div>
									<div style="margin-top: 25px;">16.17&nbsp; PURCHASER IS NOT RELYING ON ANY ORAL OR WRITTEN REPRESENTATIONS, WARRANTIES, STATEMENTS OR AGREEMENTS NOT CONTAINED IN THIS WRITTEN AGREEMENT. NO REAL ESTATE AGENT OR OTHER PERSON IS AUTHORIZED TO MAKE ANY REPRESENTATIONS OR PROMISES THAT ARE NOT CONTAINED IN THIS AGREEMENT. NEITHER PARTY SHALL MAKE ANY CLAIM AGAINST THE OTHER BASED ON ANY ALLEGED REPRESENTATION, WARRANTY OR AGREEMENT THAT IS NOT CONTAINED IN THIS AGREEMENT OR THE EXHIBITS HERETO.
									</div>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>17. Exhibits and Addenda:</strong> This Agreement includes the following Exhibits and Addenda which have been reviewed and approved by the Purchaser prior to signing this Agreement:
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>Receipt for Documentation</div>
									<div>Exhibit A -- Legal Description of the Strata Unit</div>
									<div>Exhibit B -- Furnishings Addendum</div>
									<div>Exhibit C -- Required Provisions Containing Disclosure Information</div>
									<div>Exhibit D -- Form of Use and Access Agreement</div>
								</div>
							</td>
						  </tr>	
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong>18. NOTICE TO PARTIES. THIS AGREEMENT, WHEN EXECUTED BY PURCHASER AND DELIVERED TO SELLER, TOGETHER WITH THE EARNEST MONEY SPECIFIED HEREIN, SHALL CONSTITUTE AN OFFER BY PURCHASER TO PURCHASE THE STRATA UNIT IN ACCORDANCE WITH THE TERMS AND CONDITIONS PROVIDED HEREIN, AND SHALL NOT BE BINDING UPON SELLER UNLESS AND UNTIL A DULY AUTHORIZED OFFICER OR AGENT OF SELLER HAS EXECUTED THIS AGREEMENT. PARTIES ARE ADVISED TO CONSULT WITH A LAWYER BEFORE SIGNING THIS AGREEMENT IF THEY DESIRE LEGAL ADVICE.</strong>
								</div>
							</td>
						  </tr>
						  <br pagebreak="true"/>
						  <tr>
							<td colspan="2">
								<div style="margin: 50px;text-align:center margin-bottom: 35px;">
									<strong>SIGNATURE PAGE TO FOLLOW</strong>
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-bottom:25px;">
								IN WITNESS WHEREOF, Purchaser and Seller have each caused this Agreement to be executed on the date first appearing in the preamble of this Agreement.
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td>
								<div><strong><u>Purchaser:</u></strong></div>
								<div style="margin-top:20px;"><u><strong style="color:#fff;">SIGNATURESIGNATURE:</strong></u></div>
								<div style="margin-top:10px;">Signature</div>
								<div style="margin-top:50px;"><u><strong style="color:#fff;">SIGNATURESIGNATURE:</strong></u></div>
								<div style="margin-top:10px;">Signature</div>
							</td>
							<td style="vertical-align: top;">
								<div><strong><u>Seller: ________________</u></strong></div>
								<div style="margin-top:20px;">LYNX HOLDINGS LIMITED, a company organized and existing under the laws of Belize</div>
								<div style="margin-top:20px;">By: <u><strong>'.$data["by"].'</strong></u></div>
								<div style="margin-top:20px;">Name: <u><strong>'.$data["seller_name"].'</strong></u></div>
								<div style="margin-top:20px;">Title: <u><strong>'.$data["seller_title"].'</strong></u></div>
							</td>
						  </tr>
		                  <br pagebreak="true"/>
						  <tr>
							<td colspan="2">
								<div style="margin: 50px;text-align:center">
									<strong>RECEIPT FOR DOCUMENTATION</strong>
								</div><br>
							</td>
						  </tr>	
						  
						  <tr>
							<td colspan="2">
								<div style="margin-bottom:20px;">
									The undersigned acknowledges that the items indicated have been received.
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-bottom:20px;">
									Covenant and Bylaws for Alaia, Autograph Collection
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top:20px;">
									Purchaser:<u><strong>'.$data["name"].'</strong></u>
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td>
								<div style="margin-top:20px;">
									Signature <u><strong>________________</strong></u>
								</div><br>
							</td>
							<td>
								<div style="margin-top:20px;">
									<u><strong>                 </strong></u>
									<br>
									(Date)
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td>
								<div style="margin-top:20px;">
									Signature <u><strong>________________</strong></u>
									<br>
								</div><br>
							</td>
							<td>
								<div style="margin-top:20px;">
									<u><strong>________________</strong></u>
									<br>
									(Date)
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top:20px;">
									Strata Unit Number(s)  <u><strong>'.$data["strata_unit"].'</strong></u>
								</div>
							</td>
						  </tr>
						  <br pagebreak="true"/>
						  <tr>
							<td colspan="2">
								<div style="margin-top: 50px;text-align:center">
									<strong><u>Exhibit A</u></strong>
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 30px;text-align:center">
									<strong><u>LEGAL DESCRIPTION OF REAL ESTATE</u></strong>
								</div><br><br>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin: 60px 0;text-align:center">
									TO BE ATTACHED PRIOR TO CLOSING
								</div>
							</td>
						  </tr>
						  <br pagebreak="true"/>
						  <tr>
							<td colspan="2">
								<div style="margin-top: 50px;text-align:center">
									<strong><u>Exhibit B</u></strong>
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 20px;text-align:center">
									<strong>FURNISHINGS ADDENDUM <br>TO<br>PURCHASE AND SALE AGREEMENT ALAIA, AUTOGRAPH COLLECTION</strong>
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 20px;">
									This Addendum is attached to and made part of the Purchase and Sale Agreement Alaia, Autograph Collection(the "<u>Agreement</u>"), entered into as of <u><strong>'.date("d F Y").'</strong></u> by and between LYNX HOLDINGS LIMITED, a company organized and existing under the laws of Belize (“<u>Seller</u>”), and <u><strong>'.$data["name"].'</strong></u> ("<u>Purchaser</u>").
								</div>
								<div style="margin-top: 20px;">
									Each capitalized term used and not defined in this Addendum shall have the meaning ascribed to such term in the text of the Agreement.
								</div>
								<div style="margin-top: 20px;">
									For the purposes of establishing the applicable stamp duty on the Purchase Price as it pertains to calculation of the Closing Costs as provided within Section 6 of the Agreement, the amount attributable to the Furnishings included in the Purchase Price and set out in the Schedule hereto, shall be deemed the sum of $ <u><strong>35,000.00</strong></u>. For the purposes contained herein, such sum shall be deducted from the Purchase Price reflected in <u>Section 2</u> of the Agreement, and the resulting balance shall form the basis for such calculation as provided herein.
								</div>
								<div style="margin-top: 20px;margin-bottom: 60px;">
									Executed as of <u><strong> '.$data["executed_of"].'</strong></u>
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td>
								<div>
									<strong><u>Purchaser:</u></strong>
								</div>
								<div style="margin-top:20px;">
									<u><strong style="color:#fff;">SIGNATURESIGNATURE:</strong></u>
								</div>
								<div style="margin-top:10px;">
									Signature
								</div>
								<div style="margin-top:50px;">
									<u><strong style="color:#fff;">SIGNATURESIGNATURE:</strong></u>
								</div>
								<div style="margin-top:10px;">
									Signature
								</div>
							</td>
							<td style="vertical-align: top;">
								<div>
									<strong><u>Seller:</u></strong>
								</div>
								<div style="margin-top:20px;">
									LYNX HOLDINGS LIMITED, a company organized and existing under the laws of Belize
								</div>
								<div style="margin-top:20px;">
									By: <u><strong>'.$data["seller_name"].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Name: <u><strong>'.$data["seller_name"].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Title: <u><strong>'.$data["seller_title"].'</strong></u>
								</div>
							</td>
						  </tr>
						  <br pagebreak="true"/>
						  <tr>
							<td colspan="2">
								<div style="margin-top: 50px;text-align:center">
									<strong><u>Exhibit C</u></strong>
								</div>
								<div style="margin: 25px 0;text-align:center">
									<strong><u>REQUIRED PROVISIONS CONTAINING DISCLOSURE INFORMATION</u></strong>
								</div><br>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div>1. Purchaser acknowledges that: (i) the Strata Unit is being developed and sold by the Seller and not by Marriott International, Inc. ("<u><i>Marriott</i></u>") or its affiliates; (ii) Marriott has not confirmed the accuracy of or endorsed any marketing or sales materials provided by Seller, and Seller is solely responsible for the content thereof; (iii) Marriott is not part of or an agent for Seller, has not acted as broker, finder or agent in connection with the sale of the Strata Unit, and is neither  encouraging nor discouraging the purchase of or any investment in the Strata Unit; and (iv) Seller is solely responsible to honor its obligations to Purchaser hereunder and, including but not limited to the refund to Purchaser or any purchase price deposits, installments or payments paid by the Purchaser if such refund is required or permitted hereunder. The Purchaser irrevocably and unconditionally waives and releases Marriott and its affiliates and their employees, agents, shareholders, manager, officers and directors from and against any liability with respect to Seller’s failure to complete or otherwise fulfill Seller’s obligations under this Agreement.
								</div>
								<div style="margin-top: 25px;">2. The Purchaser hereby represents and warrants that: (a) Purchaser is entering into this Agreement without reliance upon any representation concerning any potential for future profit, any future appreciation in value, any rental income potential, tax advantages, depreciation or investment potential and without reliance upon any hotel affiliation or any monetary or financial advantage; (b) no statements or representations have been made by Marriott, Seller, or any of their respective agents, employees or representatives with respect to (i) the economic or tax benefits to be derived from the managerial efforts of a third party as a result of renting the Strata Unit or other residential units, or (ii) the economic or tax benefits to be derived from ownership of the Strata Unit, or (iii) any potential for future profit, any future appreciation in value, any rental income potential, tax advantages, depreciation or investment potential; (c) the decision to enter into this Agreement is not based on the availability of a rental program or on projections regarding returns to participants in any rental program; and (d) the decision to enter into this Agreement is not based on estimates, sampling, statistical analysis or assumptions involving speculation, rental rates or expected occupancies of the Strata Unit.
								</div>
								<div style="margin-top: 25px;">3. The Purchaser acknowledges that: (i) the Alaia Hotel & Resort, Autograph Collection (the “<u><i>Hotel</i></u>”) is independently owned by Seller and not by Marriott, and Seller has been granted a license to use Marriott’s trademarks pursuant to a franchise agreement with Marriott (the "<u><i>Franchise Agreement</i></u>"); and (ii) the Hotel is operated by, subject to Marriott’s approval, either Seller or a third party operator (which may be an affiliate of Seller) ("<u><i>Hotel Management Company</i></u>"), retained by Seller pursuant to a management agreement between Seller and Hotel Management Company to which Marriott is not a party. The relationship of Marriott to the Hotel and the Project are merely that of a licensor of a franchise to operate a hotel and a license to market, offer, and sell branded residences, using certain of Marriott’s trademarks accordance with and subject to the terms and conditions contained in the Franchise Agreement, the residential marking license agreement between Marriott and Seller (the "Residential Marketing License Agreement", and the residential trademark license agreement between Marriott and Seller (the "<u><i>Residential Trademark License Agreement</i></u>"), and neither Seller nor the Hotel is affiliated with Marriott in any way. The Franchise Agreement is limited in duration and there is no guarantee or other assurance of any kind that the Hotel or the Project will continue to be associated with Marriott’s trademarks for any period of time. Purchaser will not have any interest in  the Franchise Agreement or the franchise granted thereunder whatsoever. In no event shall Purchaser be construed as a franchisee or subfranchisee under the Franchise Agreement.
								</div>
								<div style="margin-top: 25px;">4. Purchaser acknowledges that either Seller or Hotel Management Company may provide certain A-la-Carte services under a certain A-la-Carte Services Agreement to be executed between either Seller or Hotel Management Company and Purchaser ("<u><i>A-la-Carte Services</i></u>"). Purchaser acknowledges that in no event will Marriott provide any A-la-Carte Services to Purchaser. Purchaser will pay either Seller or Hotel Management Company directly, and not Marriott, for all costs and expenses associated with providing any A-la-Carte Services to Purchaser, and Marriott will have no obligations, responsibilities or liabilities in connection therewith.
								</div>
								<div style="margin-top: 25px;">5. Purchaser acknowledges that: (i) the Project is not managed or operated by Marriott, and the Association has been granted a limited license to use the Licensed Marks (as herein defined) pursuant to a Residential Trademark License Agreement with Marriott; and (ii) the Project is operated by, subject to Marriott’s approval, either Seller or a third party operator (which may be an affiliate of Seller) ("<u><i>Association Management Company</i></u>"), retained by Seller and/or the Association pursuant to a management agreement between Seller and/or the Association and Association Management Company to which Marriott is not a party.
								</div>
								<div style="margin-top: 25px;">6. The Purchaser acknowledges that in the event the Residential Trademark License Agreement is terminated for any reason, all use of the name "<u><i>Autograph Collection</i></u>", the Autograph Collection name and mark, and all other trademarks, service marks, trade names, symbols, emblems, logos, insignias, indicia or origin, slogans and designs used in connection with the Project (the "<u><i>Licensed Marks</i></u>") will cease at the Project, all indicia of affiliation of the Project with the Licensed Marks and the Marriott brand, including all signs or other materials bearing any of the Licensed Marks will be removed from the Project and the Project, and all services (if any) to be provided by Marriott to the Project will cease.
								</div>
								<div style="margin-top: 25px;">7. So long as the Residential Trademark License Agreement is in effect, the Project will have the right to be known as “Alaia, Autograph Collection” or by any other name as may be approved by Marriott. Use of the Licensed Marks will be limited to (i) use of the approved name on signage on or about the Project; and (ii) textual non-trademark use of the approved name by the Association, its Board of Directors, and individual Proprietors, and their agents, solely to identify the address of the Project or the Strata Unit but not with respect to any particular Strata Unit. No other use of the Licensed Marks will be permitted. All uses of the Licensed Marks in connection with the Project and the Branded Residences, including the approved name, are subject to removal and must cease upon the expiration or termination of the Residential Trademark License Agreement. Purchaser acknowledges that Marriott reserves the right (whether itself or through an Affiliate) to license and/or operate any other residential project using the Licensed Marks or any other mark or trademark at any other location, including a site proximate to the Project.
								</div>
								<div style="margin-top: 25px;">8. Purchaser acknowledges that Purchaser will not acquire, by virtue of Purchaser’s ownership of a Strata Unit or otherwise, any right, license or ability to use any Licensed Marks other than as expressly provided in the Residential Trademark License Agreement.
								</div>
								<div style="margin-top: 25px;">9. Purchaser acknowledges that so long as the Franchise Agreement is in effect, the Project will not be known by any name that includes any hotel brand, trade name, trademark, system, chain, or other lodging or hospitality company name that is a Competitor of Marriott.
								</div>
								<div style="margin-top: 25px;">10. Purchaser acknowledges and agrees that because of overall restrictions and conditions imposed on and applicable to Marriott and other considerations, so long as the Franchise Agreement is in effect Proprietors will not sell, assign, transfer or lease a Strata Unit to any Person if such Person or any of its affiliates is a Restricted Person or a Competitor.
								</div>
								<div style="margin-top: 25px;">11. So long as the Franchise Agreement is in effect, the Proprietor shall maintain the Strata Unit in compliance with the Standards. Further, for so long as the Franchise Agreement is in effect, Proprietor shall not without the prior written consent of Franchisor (i) participate in any Vacation Club Product with respect to the Strata Unit, or (ii) utilize any rental agent other than Seller or its affiliate for the rental of the Strata Unit.
								</div>
								<div style="margin-top: 25px;">12. In the event of any conflict between this Agreement and the Franchise Agreement, the terms of the Franchise Agreement will govern and control.
								</div>
								<div style="margin-top: 25px;">13. So long as the Franchise Agreement is in effect, Proprietor shall cause to be provided to any potential third party purchasers of the Strata Unit the disclosure information set forth in this <u>Exhibit C</u>.
								</div>
								<div style="margin-top: 25px;">14. Capitalized terms herein have the respective meaning given in the Agreement. The following terms used in this <u>Exhibit C</u> and not defined in the Agreement have the meanings given below:
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>(a) "<u><i>Affiliate</i></u>" means, for any Person, a Person that is directly or indirectly Controlling, Controlled by, or under common Control with such person.
									</div>
									<div style="margin-top: 25px;">(b) "<u><i>Brand</i></u>" means a hotel brand, trade name, trademark, system or chain of hotels.
									</div>
									<div style="margin-top: 25px;">(c) "<u><i>Competitor</i></u>" means any Person that has a direct or indirect Ownership Interest in a Brand or is an Affiliate of such Person, or any Person that is a Master Franchisee of a Brand, or any officer or director of such Persons, but only if the Brand is comprised of at least (i) 10 luxury hotels; (ii) 20 full-service hotels; or (iii) 50 limited-service hotels. For purposes of this definition, “luxury” hotels are hotels that had a system average daily rate in excess of US$300 for the most recent calendar year, “full-service” hotels are hotels that typically offer three meals a day, room service and have significant group meeting space, and “limited-service” hotels are hotels that are neither “luxury” hotels nor “full- service” hotels. No Person will be considered a Competitor if such Person has an interest in a Brand merely as (i) a franchisee or a passive investor that has no Control over the business decisions of the Brand, such as limited partners of non-Controlling stockholders, or (ii) a management company that operates hotels on behalf of multiple brands.
									</div>
									<div style="margin-top: 25px;">(d) "<u><i>Control</i></u>" (in any form, including "Controlling" or "Controlled") means, for any Person, the possession, directly or indirectly, of the power to direct or cause the direction of the management or policies of such Person.
									</div>
									<div style="margin-top: 25px;">(e) "<u><i>Franchisor Lodging Facilities</i></u>" means all hotels and other lodging facilities, chains, brands, or hotel systems owned, leased, under development, or operated or franchised or licensed, now or in the future, by Franchisor or any of its Affiliates, including: (i) AC Hotels by Marriott; African Pride Hotels; Aloft hotels; Autograph Collection hotels; Bvlgari and resorts; Courtyard by Marriott hotels; Delta Hotels by Marriott; Design Hotels; Edition hotels; Element hotels; Fairfield by Marriott hotels; Fairfield Inn by Marriott hotels; Fairfield Inn & Suites by Marriott hotels; Four Points hotels; Gaylord Hotels; JW Marriott Hotels & Resorts; JW Marriott Marquis hotels; Le Meridien hotels and resorts; Marriott Conference Centers; Marriott Executive Apartments; Marriott Hotels, Resorts and Suites; Marriott Marquis hotels; Moxy Hotels; Protea Hotels by Marriott; Protea Hotels Fire & Ice!; Renaissance hotels; Residence Inn by Marriott hotels; Ritz-Carlton hotels and resorts; Ritz-Carlton Reserve; Sheraton hotels and resorts; SpringHill Suites by Marriott hotels; St. Regis hotels, resorts and suites; The Luxury Collection hotels, resorts and suites; TownePlace Suites by Marriott hotels; Tribute Portfolio hotels and resorts; W Hotels; and Westin hotels and resorts; (ii) whole ownership facilities and other lodging products or concepts, including Edition Residences; Grand Residences by Marriott; JW Marriott Residences; Marriott Marquis Residences; The Residences at The Ritz-Carlton; and The Ritz-Carlton Residences; (iii) Vacation Club Products, including Marriott Vacation Club; Vistana Signature Experiences; The Ritz-Carlton Club; and The Ritz-Carlton Destination Club; and (iv) any other lodging product or concept developed or used by Franchisor or any of its Affiliates in the future.
									</div>
									<div style="margin-top: 25px;">(f) "<u><i>Guestroom</i></u>" means each rentable unit in the Hotel consisting of a room, Program Strata Unit, suite or suites of rooms used for overnight guest accommodation, entrance to which is controlled by the same key; however, adjacent rooms with connecting doors that can be locked and rented as separate units are considered separate Guestrooms.
									</div>
									<div style="margin-top: 25px;">(g) "<u><i>Master Franchisee</i></u>" means a Person that has the exclusive rights to develop, operate or sub-license a Brand owned or Controlled by a Competitor.
									</div>
									<div style="margin-top: 25px;">(h) "<u><i>Person</i></u>" means an individual (and the heirs, executors, administrators or other legal representatives of an individual), a partnership, a joint venture, a firm, a company, a corporation, a governmental department or agency, a trustee, a trust, an unincorporated organization or any other legal entity.
									</div>
									<div style="margin-top: 25px;">(i) "<u><i>Proprietor</i></u>" means the Person holding legal or beneficial ownership of a Strata Unit, including the following: stock, partnership, limited liability company, joint tenancy, leasehold, proprietorship, trust, beneficiary, proxy, power-of-attorney, option, warrant, and any other interest that evidences ownership or Control.
									</div>
									<div style="margin-top: 25px;">(j) "<u><i>Ownership Interest</i></u>" means all forms of legal or beneficial ownership of entities or property, including the following: stock, partnership, limited liability company, joint tenancy, leasehold, proprietorship, trust, beneficiary, proxy, power-of-attorney, option, warrant, and any other interest that evidences ownership or Control.
									</div>
									<div style="margin-top: 25px;">(k) "<u><i>Program Strata Unit</i></u> "means and includes those strata units, (i) the Proprietors of which are parties to Rental Agreements provided by Marriott pursuant to the Franchise Agreement and (ii) that are owned by Seller or its Affiliates, all of which must be in the Guestroom inventory of the Hotel, and which will be rented to the general public as part of the Hotel.
									</div>
									<div style="margin-top: 25px;">(l) "<u><i>Rental Agreement</i></u>" means the rental management agreement between Seller or the Hotel Management Company and the Proprietor of a strata unit, in form and substance satisfactory to Marriott, pursuant to which the Proprietor of such strata unit engages Seller or the Hotel Management Company as its sole and exclusive agent to rent, manage and operate such Proprietor’s strata unit.
									</div>
									<div style="margin-top: 25px;">(m) "<u><i>Rental Program</i></u>" means the rental management program pursuant to which a Proprietor engages Seller (or Hotel Management Company) as its executive agent for purposes of renting, operating and managing such Proprietor’s Unit as a Program Strata Unit.
									</div>
									<div style="margin-top: 25px;">(n) "<u><i>Restricted Person</i></u>" means a Person who is (i) identified by any government or legal authority as a Person with whom Marriott or its Affiliates are prohibited or restricted from transacting business, including but not limited to a Person identified on the Office  of Foreign Assets Control List of Specially Designated Nationals and Blocked Persons or the Consolidated United Nations Security Council Sanctions List; (ii) directly or indirectly 10% or more owned or controlled by any such Person identified in (i) above; or (iii) ordinarily resident, incorporated or based in any country or territory that is the subject of a comprehensive U.S. embargo, or owned or controlled by, or acting on behalf of the government, of any such country.
									</div>
									<div style="margin-top: 25px;">(o) "<u><i>Standards</i></u>" means Franchisor’s manuals, standard operating procedures, systems, guides, programs (including the Quality Assurance Program), requirements, directives, specifications, Franchisor’s quality requirements for planning and constructing or renovating and refurbishing a System Hotel, fire protection systems and life safety components of the Hotel, and such other information, initiatives and controls that are necessary for operating System Hotels.
									</div>
									<div style="margin-top: 25px;">(p) "<u><i>System Hotel</i></u>" means a hotel operated by Franchisor, an Affiliate of Franchisor, or a franchisee or licensee of Franchisor or its Affiliates under the trade name Autograph Collection outside of the United States of America and Canada, and excludes any other Franchisor Lodging Facility or other business operation.
									</div>
								</div>
							</td>
						  </tr>
						  <br pagebreak="true"/>
						  <tr>
							<td colspan="2">
								<div style="margin-top: 50px;text-align:center">
									<strong><u>Exhibit D</u></strong>
								</div>
								<div style="margin-top: 25px;text-align:center">
									<strong><u>FORM OF USE AND ACCESS AGREEMENT</u></strong>
								</div><br>
							</td>
						  </tr>
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<strong><u>THIS USE AND ACCESS AGREEMENT</u></strong> (the  "<u><i>Agreement</i></u>")  is  made  and  entered  into <u><strong>'.date("d F Y").'</strong></u>, by and between <strong>LYNX HOLDINGS LIMITED,</strong> a company organized	and existing under the laws	of	Belize	("<i>Resort	Owner</i>"), and  <u><strong>'.$data["name"].'</strong></u> ,   having   an   address at <u><strong>'.$data["address"].'</strong></u> 	("<i>Unit Owner</i>"). Resort Owner and Unit Owner are sometimes individually referred to in this Agreement as a "Party" and collectively referred to the "Parties".
								</div>
								<div style="margin-top: 25px;text-align:center">
									<strong>RECITALS:</strong>
								</div>
							</td>
						  </tr>
		               <!-- New code start here ( 02-Feb-2021 ) -->
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;">
									<div>A. Resort Owner is the owner of certain real property located in San Pedro Ambergris Caye, Belize, as more particularly described in the Declaration (as defined below), on which it intends to construct certain improvements as a mixed use, commercial and residential strata development (the "<u>Project</u>").
									</div>
									<div style="margin-top: 25px;">B. In connection with the Project, Resort Owner intends to construct certain commercial units, shared areas, amenities, and other facilities as further described in Section 2 of this Agreement (the "<u>Resort Facilities</u>") located on the real property and improvements described on the attached <u>Exhibit A</u> (the "<u>Resort Facilities Property</u>").
									</div>
									<div style="margin-top: 25px;">C. The Project shall be governed by those certain Covenants and Bylaws for Alaia, Autograph Collection (the "<u>Declaration</u>") and will contain strata units ("<u>Strata Units</u>") as defined in the Declaration.
									</div>
									<div style="margin-top: 25px;">D. Unit Owner is the owner of that Strata Unit No. [<u><strong>'.$data["strata_unit"].'</strong></u>];
									</div>
									<div style="margin-top: 25px;">E. Unit Owner desires to obtain certain limited access and use rights in and to the Resort Facilities on behalf of itself and its guests, tenants, licensees, and invitees (collectively, together with Unit Owner, the "<u>Permitted Users</u>"); and
									</div>
									<div style="margin-top: 25px;">F. Resort Owner desires to grant the limited use and access rights herein described to the Permitted Users under the conditions and terms set forth below.
									</div>
									<div style="margin-top: 25px;">NOW, THEREFORE, for and in consideration of the premises, the mutual covenants contained herein, and Ten and No/100 Dollars ($10.00) and other good and valuable consideration, the receipt and sufficiency of which are hereby acknowledged by the Parties, Resort Owner does hereby bargain, grant and exchange to the Unit Owner the rights herein contained, and Resort Owner and the Unit Owner hereby agree as follows:
									</div>
									<div style="margin-top: 25px;">1. <u>Recitals; Definitions.</u> The above recitals are true and correct and form a material part of this Agreement. All capitalized terms used in this Agreement and not otherwise defined herein shall have the meanings ascribed to such terms in the Declaration.
									</div>
									<div style="margin-top: 25px;">2. <u>Resort Facilities.</u>
									</div>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>(a) The Resort Facilities shall generally consist of those facilities initially owned by the Resort Owner located within the Project from time to time which do not otherwise constitute the Strata Units or Common Property, which may include, without limitation, any (i) resort pools, spas and outdoor showers which are made available to all Proprietors and their guests, (ii) improvements related to the rental management servicing operations of the Project, including the front desk, lobby, offices, and conference facilities, (iii) improvements located on the public beach, (iv) restaurants, bars, taverns and related dining facilities, (v) beach service centers, (vi) room services and water sports rental facilities, and (vii) spa and wellness services and centers as may be constructed within the Project.
									</div>
									<div style="margin-top: 25px;">(b) The Project as initially planned may include the following Resort Facilities:</div>
								</div>
								<div style="">
									<div>(i) the front desk and lobby of the Hotel</div>	
									<div style="margin-top: 25px;">(ii) all pools and spas located within the Project (excluding any private pools or spas within the Strata Units, if any).
									</div>
									<div style="margin-top: 25px;">(iii) restaurants, taverns and related dining facilities located within the Project.
									</div>
									<div style="margin-top: 25px;">(iv) room services, retail shops, water sports rental facilities, if any.
									</div>
									<div style="margin-top: 25px;">(v) spa and wellness services and centers, if any.
									</div>
									<div style="margin-top: 25px;">(vi) the fitness center, if any, and
									</div>
									<div style="margin-top: 25px;">(vii) any other area of the Project designated by Resort Owner as a Resort Facility from time to time, excluding any area of the Project undesignated by Resort Owner as a Resort Facility from time to time, such right being expressly reserved by Resort Owner.
									</div>
									
								</div>
								<div style="">
									<div>(c) Except as specifically provided in this Agreement, no other improvements, facilities, amenities, or areas located within the Project are currently subject to this Agreement.
									</div>
									<div style="margin-top: 25px;">(d) Resort Owner has the right, but not the obligation, in its sole, absolute, and unfettered discretion, to construct additional facilities and amenities within the Project without the consent of any Permitted Users. Any such additional facilities or amenities constructed by Resort Owner may or may not be subjected to this Agreement. Resort Owner does not make any representations regarding any possible additional facilities or amenities and is not obligated to construct or subject to this Agreement any such facilities or amenities. The Resort Owner reserves the right to change, modify, or abandon any plans related to the Resort Facilities at any time in its sole discretion. No guarantee is made that the proposed Resort Facilities will be provided or that, if provided, the number, type, size and location will be as depicted herein.
									</div>
								</div>
								<br pagebreak="true"/>
								<div style="margin-top: 25px;">
									<div>3. <u>Access and Use of Facilities.</u>
									</div>
								</div>
								<div style="margin-top: 25px;padding-left: 30px;">
									
									<div>(a) Resort Owner hereby grants to the Permitted Users a limited non-exclusive license (“Access License”) on, over, upon and across such paths, walkways, aisles, hallways, lobbies and other portions of the Resort Facilities Property as are reasonably necessary for the convenience of access to, egress from, and use of the Project by the Permitted Users; provided, however, that such access and use rights shall only be available during that period of time that a given Permitted User has the right to use and occupy the Resort Facilities and during those hours of each day designated by Resort Owner for such use. The Access License is subject to the conditions and limitations set forth in this Agreement and any other rules and regulations regarding access, use and enjoyment of the Resort Facilities as may be imposed by Resort Owner from time to time. This Agreement shall continue in force and effect unless  and until cancelled by either Party upon thirty (30) days’ written notice to the other Party.
									</div>
									<div style="margin-top: 25px;">(b) The privileges of Permitted Users to utilize the public areas of the Resort Facilities are appurtenant to and inseparable from Unit Owner’s Strata Unit and shall automatically terminate upon any permitted transfer of a Unit Owner’s Strata Unit to any transferee or grantee, whether voluntary or by operation of applicable law. The transferee of a Strata Unit shall, immediately and automatically upon the permitted transfer of a Unit Owner’s Strata Unit as provided herein be entitled to the benefits in the use of the public areas of the Resort Facilities as set forth in this Agreement. Any  rights granted to the Permitted Users in the public areas of the Resort Facilities shall not represent any ownership, proprietary interest, beneficial interest or any other vested interest whatsoever in the Resort Facilities or any of the assets of the Resort Owner. Except as may otherwise be set forth in this Agreement or in the Declaration, Permitted Users shall not have any right to vote on or approve any matter relating to management or operation of the Resort Facilities.
									</div>
									<div style="margin-top: 25px;">(c) As a condition to use of the public areas of the Resort Facilities, Permitted Users may be required to sign such acknowledgements, disclaimers and liability and damage waivers in the form provided by the Resort Owner.
									</div>
									<div style="margin-top: 25px;">(d) The use and enjoyment of the public areas of the Resort Facilities shall be subject to Resort Owner’s reasonable operating hours, seasonal closings, weather-related closings and other temporary closings as Resort Owner determines necessary to perform renovations, improvements, maintenance or repairs.
									</div>
									<div style="margin-top: 25px;">(e) The public areas of the Resort Facilities shall be made available on a first-come, first-served basis, except for portions of the Resort Facilities which accept advance reservations by Permitted Users. No representation or warranty is made or authorized by Resort Owner or any of its affiliates or agents that the Resort Facilities are of a size or capacity to accommodate all persons who may be authorized or desire to use them at any one time. In such event, neither Resort Owner nor its affiliates or agents shall have any duty or obligation to provide alternative facilities and shall have no responsibility for any costs incurred by any Permitted User.
									</div>
								</div>
								<div>
									<div>4. <u>Alteration, Removal, Replacement, Relocation.</u> Notwithstanding the present location of any paths, walkways, aisles, hallways, lobbies, Resort Facilities, or other rights of use or access granted under this Agreement, and wherever the same hereafter may be located on the Resort Property, Resort Owner shall have the right, from time to time, in its sole, absolute, and unfettered discretion and at its expense, to alter, modify, rearrange, relocate, replace, or remove any Resort Facility without the necessity or requirement of having to obtain the consent of any Permitted User.
									</div>
									<div style="margin-top: 25px;">5. <u>Payment of Fees.</u></div>
								</div>
								<div style="">
									<div>(a) Resort Use Fee. The Unit Owner, on behalf of the Permitted Users, shall pay Resort Owner a Resort Use Fee (“Resort Use Fee”) equal to BZ$200.00. The Resort Use Fee shall be billed to the Unit Owner by Resort Owner on a monthly basis. The Unit Owner agrees that Resort  Owner, in Resort Owner’s sole, absolute and unfettered discretion, may elect to set off the amount of any billed but unpaid Resort Use Fee against any sums owed to the Unit Owner by Resort Owner for Assessments or otherwise in lieu of receiving direct payment from the Unit Owner for same.
									</div>
									<div style="margin-top: 25px;">
										(b) Failure to Timely Remit Payment. Except as otherwise provided in the Declaration, if the Unit Owner fails to timely remit to Resort Owner the Resort Use Fee, the Unit Owner and all other Permitted Users may be barred from access to the Resort Facilities or may be charged a daily rate for such use in the sole, absolute, and unfettered discretion of Resort Owner. In addition, any delinquent Resort Use Fee shall bear interest from the applicable payment due date at the lesser of eighteen percent (18%) or the maximum rate permitted by applicable law. Resort Owner may bring an action at law or in equity against the Unit Owner for any and all amounts due hereunder and there shall be added to the amount of such obligation the costs of collection, including the preparing and filing of the complaint in any such action, and reasonable attorneys’ fees. If a judgment is obtained, such judgment shall include interest on the obligation as above provided and reasonable attorneys’ fees and other professionals’ fees to be fixed by the court, together with the costs of the action. If a Unit Owner’s  portion of the Resort Use Fee is not paid on the date when due, then such amount, together with such late charges and interest, and the costs of collection (including, without limitation, attorneys’ fees), will be a charge and continuing lien on the Unit Owner’s Strata Unit, and will bind such property in the hands of the Unit Owner, its legal representatives, successors, and assigns in accordance with the Declaration.
									</div>
								</div>
								<div style="margin-top: 25px;">
									<div>6. <u>No Opting Out of Payment Due to Non-Use.</u> Unit Owner may not elect to pay the Resort Use Fee because the Unit Owner elects not to make use of or to access the Resort Facilities.
									</div>
									<div style="margin-top: 25px;">7. <u>Operation of Resort and the Resort Facilities.</u>
									</div>
								</div>
								<div style="">
									<div>(a) <u>Operation of Resort Facilities.</u> Resort Owner is responsible for the management and operation of the Resort Facilities. Subject to its obligations under separate agreements pertaining to the operation of the Resort Facilities, if any, Resort Owner may make the Resort Facilities available for use by guests, renters, exchangers, and other property owners at other resorts in the general vicinity of the Project, to members of the general public, or to any other person in Resort Owner’s sole, absolute, and unfettered discretion and may charge guest and other user fees in such amounts as Resort Owner may establish for such use. The Resort Facilities are intended to be operated as a commercial operation and Resort Owner shall have no obligation to operate the Resort Facilities on a nonprofit basis for the exclusive benefit of the Permitted Users.
									</div>
									<div style="margin-top: 25px;">(b) <u>Transfer to Third Party.</u> Nothing in this Agreement is intended to prohibit or in any manner restrict Resort Owner’s ability to sell, transfer, convey, assign, lease, mortgage, encumber or otherwise dispose of any or all of its interest in any portion of the Resort Facilities to any person on a for- profit or not-for-profit basis. All or any portion of the Resort Facilities may be developed for any lawful purpose in accordance with applicable law.
									</div>
									<div style="margin-top: 25px;">(c) <u>Resort Management. </u> Resort Owner may enter into leases, licenses and management or operating agreements with respect to the Resort Facilities as Resort Owner deems appropriate. Resort Owner in its sole discretion may delegate some or all of its duties hereunder to a third party, which third party may be an affiliate of Resort Owner.
									</div>
									<div style="margin-top: 25px;">(d) <u>Personal Property. </u>Permitted Users assume sole responsibility for their personal property in their use of the Resort Facilities and acknowledge that Resort Owner shall not be responsible for any loss or damage to any personal property used or stored at the Resort Facilities, whether in lockers or elsewhere. Permitted Users in the use of the Resort Facilities also acknowledge and understand that they are liable for any damage or personal injury occurring during the use of the Resort Facilities as a result of such person’s actions. 
									</div>
									<div style="margin-top: 25px;">(e) <u>Interruptions in Use.</u>  Notwithstanding the Access License, Resort Owner shall have the right to temporarily close, or interrupt or suspend use of the Resort Facilities in order to maintain, repair, or replace the Resort Facilities. Additionally, Resort Owner or its designees may temporarily designate from time to time certain areas of the Resort Facilities Property, including the Resort Facilities, for Resort Owner’s exclusive use for special events, banquets, activities, and programs. Notwithstanding anything in this Agreement to the contrary, Resort Owner shall not liable for interruptions in the use of, or the unavailability of the Resort Facilities (i) by reason of equipment malfunction or failure, however caused, (ii) in connection with maintenance, repair, or failure by suppliers to provide supplies, or (iii) due to use of the Resort Facilities pursuant to Resort Owner’s rights in this Agreement. Resort Owner shall not be required to provide alternate recreational or other facilities to Permitted Users during any period that the Resort Facilities are closed or use of the Resort Facilities is interrupted or suspended.
									</div>
									<div style="margin-top: 25px;">(f) <u>Lawful Use.</u>  No Permitted User shall act in any way which shall constitute a nuisance to Resort Owner or to other Permitted Users or interfere with the use of the Resort. Resort Owner shall have the right to deny use of the Resort Facilities to offending parties.
									</div>
								</div>
								<div style="">
									<div>8. <u>Indemnification, Insurance.</u> Permitted Users shall use the Resort Facilities at their own risk, and Resort Owner shall not be liable for any loss, damage, security problem, casualty, injury, death, or any other liability except if such liability is directly caused by Resort Owner’s gross negligence or willful misconduct. The Unit Owner shall indemnify and save harmless Resort Owner from and against any such liability for damages, costs, and expenses, including reasonable attorneys’ and other professionals’ fees, from injury or death to any person or damage to any property in and about, or in connection with the Resort Facilities pursuant to this Agreement from any cause whatsoever, caused by or occurring to Permitted Users, unless such loss or injury shall be caused by the gross negligence or willful and intentional misconduct of Resort Owner.
									</div>
									<div style="margin-top: 25px;">9. <u>Remedies.</u>
									</div>
								</div>
								<div style="">
									<div>(a) <u>Violations.</u> In addition to any other remedies in this Agreement, each Party shall have the right to enforce, by proceeding at law or in equity, whether in an action for damages, injunctive relief or both, all covenants, conditions, restrictions, reservations, licenses, charges, and liens now or hereafter imposed under this Agreement.
									</div>
									<div style="margin-top: 25px;">(b) <u>Costs of Enforcement.</u>  Should either Party find it necessary to employ  an attorney or institute legal action against any Party to enforce this Agreement, the non-complying Party shall pay all costs in connection with such action, including court costs and reasonable attorneys’ fees and other professionals’ fees for pretrial, trial, and appellate proceedings.
									</div>
								</div>
								<div style="margin-top: 25px;">
									<div>10. <u>Assignability of Rights. </u>Resort Owner may assign or delegate its rights and obligations under this Agreement, in whole or in part, and in Resort Owner’s sole discretion without notice to or consent from the Unit Owner or any Permitted User, to an affiliate of Resort Owner, any third party designated by Resort Owner, or a successor to Resort Owner. Neither Unit Owner nor any  other Permitted User may assign or delegate any of its rights and obligations under this Agreement.
									</div>
									<div style="margin-top: 25px;">11. <u>Notices.</u> Unless otherwise specified in this Agreement, all notices, demands, elections, requests, or other communications that either Party may desire or be required to give under this Agreement shall be in writing and shall be given by (a) hand delivery, (b) recognized overnight courier service providing confirmation of delivery, (c) facsimile, provided that a copy of such notice also is sent the same or following business day by recognized overnight courier service providing confirmation of delivery, or (d) e-mail, provided that a copy of such notice also is sent the same or following business day by recognized overnight courier service providing confirmation of delivery, addressed as follows:
									</div>
									<div style="margin-top: 25px;">If to Resort Owner, then to:</div>							
								</div>
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>
										Lynx Holdings Limited<br>
										Seagrape Drive<br>
										P.O. Box 266<br>
										San Pedro, Ambergris Caye Attn: Andrew Ashcroft<br>
										Email: Andrew@alaiabelize.com<br>
										Fax:
									</div>
								</div>
								<div style="margin-top: 25px;">
									<div>
										With a copy to:
									</div>
								</div>	
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>
										Lynx Holdings Limited<br>
										212 North Front Street
										P.O. Box 1764<br>
										Belize City, Belize<br>
										Attn: Jacqueline Marshalleck, S.C.<br>
										Fax: (501) 223 2389
									</div>
								</div>
								<div style="margin-top: 25px;">
									<div>If to the Unit Owner, then to:</div>
								</div>	
								<div style="margin-top: 25px;padding-left: 30px;">
									<div>
										<strong>Name & Address on Page 1</strong><br>
										<u><strong>'.$data["name"].'</strong></u><br>
										Attn: <u><strong>'.$data["address"].'</strong></u><br>
										Email: <u><strong>'.$data["email"].'</strong></u><br>
										Fax: <u><strong>___________</strong></u>
									</div>
								</div>
								<div style="margin-top: 25px;">All notices given pursuant to this Section shall be deemed to have been given (i) if delivered by hand, on the date of delivery or on the date delivery was refused by the addressee as confirmed by the courier service, (ii) if delivered by overnight courier, on the date of delivery as established by the return receipt or courier service confirmation (or the date on which acceptance of delivery was refused by the addressee as confirmed by the return receipt or courier service), (iii) if delivered by facsimile, on the date of delivery as established by a facsimile transmission report from the sender’s machine (or the date on which acceptance of facsimile was refused by the addressee, as confirmed by facsimile transmission report from the sender’s machine indicating that the facsimile was sent to the correct number but failed), or (iv) if delivered by e-mail, on the date of delivery as established by a printed copy of the e-mail.
								</div>
								<div style="margin-top: 25px;">
									<div>12. <u>Governing Law.</u> This Agreement and all transactions contemplated by this Agreement shall be governed by, and construed and enforced in accordance with, the internal laws of Belize, without regard to principles of conflicts of laws. Any permitted civil action, arbitration or legal proceeding with respect to this Agreement shall be brought only in the courts of record in Belize. Each party consents to the jurisdiction of such Belize court in any such civil action or legal proceeding and waives any objection to the laying of venue of any such civil action or legal proceeding in such Belize court. Service of any court paper may be effected on such party, as provided in this Agreement, or in such other manner as may be provided under applicable laws, rules of procedure or local rules. This Section 12 shall survive the expiration or termination of this Agreement.
									</div>
									<div style="margin-top: 25px;">13. <u>Time of the Essence. </u>Except as specifically provided in this Agreement, time is of the essence as to all covenants, agreements, declarations, and conditions under this Agreement.
									</div>
									<div style="margin-top: 25px;">14. <u>Entire Agreement and Merger. </u>This Agreement constitutes the entire understanding and agreement between the Parties concerning the subject matter of this Agreement and incorporates and supersedes all prior agreements, discussions, and other communications concerning the subject matter of this Agreement. All understandings between the Parties are merged into this Agreement.
									</div>
								</div>
							</td>
						</tr>	

						<tr>
							<td colspan="2">
								<div style="margin: 50px 0;text-align:center">
									[Remainder of Page Intentionally Left Blank]
								</div>
								<br pagebreak="true"/>
								<div style="margin-bottom: 50px">
									IN WITNESS WHEREOF, this Use and Access Agreement has been duly executed as of the date first above written.
								</div><br>
							</td>
						</tr>	
						
						<tr>
							<td>
								<div style="margin-top:20px;">
									<u><strong>________________</strong></u>
								</div>
								<div style="margin-top:10px;">
									Witness
								</div>
								<div style="margin-top:50px;">
									<u><strong>________________</strong></u>
								</div>
								<div style="margin-top:10px;">
									Witness
								</div>
							</td>
							<td style="vertical-align: top;">
								<div>
									<strong>RESORT OWNER:</strong>
								</div>
								<div style="margin-top:20px;">
									LYNX HOLDINGS LIMITED
								</div>
								<div style="margin-top:20px;">
									By: <u><strong>'.$data["seller_name"].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Print Name: <u><strong>'.$data["seller_name"].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Title: <u><strong>'.$data["seller_title"].'</strong></u>
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td>
								<div style="margin-top:60px;">
									<div style="margin-top:20px;">
										<u><strong>________________</strong></u>
									</div>
									<div style="margin-top:10px;">
										Witness
									</div>
									<div style="margin-top:50px;">
										<u><strong>________________</strong></u>
									</div>
									<div style="margin-top:10px;">
										Witness
									</div>
								</div>	
							</td>
							<td style="vertical-align: top;">
								<div style="margin-top:60px;">
									<div>
										<strong>UNIT OWNER:</strong>
									</div>
									<div style="margin-top:20px;">
										<u><strong>'.$data["name"].'</strong></u>
									</div>
									<div style="margin-top:20px;">
										Print Name:
									</div>
									<div style="margin-top:50px;">
										<u><strong style="color:#fff;">SIGNATURESIGNATURE:</strong></u>
									</div>
									<div style="margin-top:20px;">
										Address: '.$data["address"].'
									</div>
								</div>	
							</td>
						  </tr>
						  <br pagebreak="true"/>
						  <tr>
							<td colspan="2">
								<div style="margin-top: 50px;text-align:center">
									<strong><u>Exhibit "E"</u></strong>
								</div>
								<div style="margin: 25px 0;text-align:center">
									Resort Facilities Property
								</div>
								<div style="margin: 25px 0;text-align:center">
									TO BE ATTACHED PRIOR TO CLOSING
								</div>
							</td>
						  </tr>
						  <br pagebreak="true"/>
						  <tr>
							<td colspan="2">
								<div style="margin-top: 50px;text-align:center">
									<strong><u>Exhibit "F"</u></strong>
								</div>
								<div style="margin: 25px 0;text-align:center">
									Deposit Payment Schedule
								</div>
							</td>
						  </tr>
						  
						  <tr>
							<td colspan="2">
								<div style="margin-top: 60px;">
									<div>
										Reserve Unit $5000  &nbsp;&nbsp;&nbsp;&nbsp;  Due with Reservation agreement 
									</div>
									<div style="margin-top:7px;">
										Initial Deposit 20%  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Due with Purchase agreement 
									</div>
									<div style="margin-top:7px;">
										2nd Deposit 50%  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  April 2020  
									</div>
									<div style="margin-top:7px;">
										3rd Deposit 25%  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  June 2020 
									</div>
									<div style="margin-top:7px;margin-bottom:50px;">
										Final Deposit 5%  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Nov 2020 at Delivery 
									</div>
								</div>
							</td>	
						  </tr>
						  <!-- New code end here ( 02-Feb-2021 ) -->
		               </table>
		            </td>
		        </tr>
	        </table>';
	        if($data['amendment_text'] != ""){
		        $html .= '<br pagebreak="true"/>
		        <table border="0" cellpadding="0" cellspacing="0">
				<tbody>
	                  <tr>
	                     <td align="center" colspan="2">
							<strong>AMENDMENT TO PURCHASE AND SALE AGREEMENT</strong>
	                     </td>
	                  </tr>
					  <tr>
	                      <td colspan="2">
	                      <br>
							<div style="margin:25px 0">THIS AMENDMENT TO THE PURCHASE AND SALE AGREEMENT (<strong>“Amendment”</strong>) is made on this by and between <u><strong>'.$data["seller_name"].'</strong></u> <strong>(Seller)</strong>, and <u><strong>'.$data["name"].'</strong></u> <strong>(Purchaser)</strong>, (collectively referred to herein as the “Parties”), to modify the terms of the Purchase and Sale Agreement. </div><br>
						</td>
	                  </tr>
					  <tr>
	                      <td colspan="2"><br>
							'.$data["amendment_text"].'<br>
						</td>
	                  </tr>
					  <tr>
	                      <td colspan="2">
							<div style="margin:80px 0 25px 0"><strong>IN WITNESS WHEREOF,</strong> the parties have executed this Amendment effective as of the date set forth above. </div>
						</td>
	                  </tr>
					  <tr>
						<td style="vertical-align: top;">
							<div style="width:100%;">
								<div>
									<strong><u>Purchaser:</u></strong><u><strong style="color:#fff;">SIGNATURESIGNATURE:</strong></u>
								</div>
								<div style="margin-top:78px;">
									By: <u><strong>'.$data["name"].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Print Name: <u><strong>'.$data["name"].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Title: <u><strong>____________</strong></u>
								</div>
								<div style="margin-top:20px;">
									Date: <u><strong>'.date("d F Y").'</strong></u>
								</div>
							</div>
						</td>
						<td style="vertical-align: top;">
							<div style="width:100%;">
								<div>
									<strong><u>Seller:</u><strong>____________</strong></strong>
								</div>
								<div style="margin-top:20px;">
									By: <u><strong>'.$data['seller_name'].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Print Name: <u><strong>'.$data['seller_name'].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Title: <u><strong>'.$data['seller_title'].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Date: <u><strong>'.$data['executed_of'].'</strong></u>
								</div>
							</div>	
						</td>
					  </tr>
	            </tbody>  
				</table>';
			}
	        $html .= '</body>
	    </html>';
    return $html;
}

function theAlaiaBelizeBanyanBayTemplate($data = null){
	$html = '
	<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
	    <head>
	        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	        <title>Purchase & Sale Agreement</title>
	        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    </head>
	    <body>
	        <table border="0" cellpadding="0" cellspacing="0">
				<tbody>
	                <tr>
	                    <td colspan="3">
							<strong>BELIZE</strong>
	                    </td>
	                </tr>
					<tr>
	                    <td colspan="3">
							<div style="">
								Agreement for Sale (the “Agreement”)<br>
								The Registered Land Act <br>
								(Chapter 194 of the Laws of Belize, Revised Edition 2000)
							</div>
	                    </td>
	                </tr>
	                <tr><br>
                     <td style="width:33%">
						<strong>REGISTRATION SECTION</strong><br>
						SAN PEDRO
                     </td>
					 <td style="width:33%">
						<strong>BLOCK</strong><br>
						7
                     </td>
					 <td style="width:33%">
						<strong>PARCEL</strong>						
                     </td>
                  </tr>
                  <tr><br>
                      <td colspan="3">
						<div style="margin:50px 0 30px 0">THIS AGREEMENT is made the DATE <u><strong>'.date("d F Y").'</strong></u> (the “Execution Date”), <u><i>between</i></u> Lynx Holdings Limited of 190 Front Street, Belize City, Belize District, Belize (hereinafter termed the "Vendor”) of the ONE PART <u><i>and</i></u>,  BUYER NAME <u><strong>'.$data["name"].'</strong></u> of ADDRESS <u><strong>'.$data["address"].'</strong></u>, (hereinafter referred to as the "Purchaser") of the OTHER PART. </div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin:0 0 20px 0"><strong>WHEREBY THE PARTIES NOW AGREE AS FOLLOWS:</strong></div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<strong>1.0 PROPERTY</strong>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px">1.1 The Vendor as the legal and beneficial owner will sell and the Purchaser will purchase,  in  accordance  with  the  terms  of  this  Agreement,  the  parcel   known  as <strong>STRATA</strong> #<u><strong>'.$data["strata_unit"].'</strong></u>, which is  part of  the  development  known as <strong>"BANYAN BAY SUITES"</strong> (the "Development"), comprised in the above-mentioned title (hereinafter called the "Property") together with all chattels, fixtures and fittings attached to or being on the Property.</div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>2.0 CONSIDERATION</strong></div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px">2.1 The Vendor shall sell the Property to the Purchaser, in consideration of the sum of  <strong>Dollars (USD$ PURCHASE PRICE)</strong> <u><strong>$ '.number_format($data["price_number"], 2).'</strong></u> (the " Purchase Price") to be satisfied by the Purchaser by: </div>
						<div style="padding-left:20px;">
							<div style="margin-top:0px">2.1.1 paying the sum of <strong>Dollars (USD INITIAL DEPOSIT)</strong> <u><strong>$ '.number_format($data["new_initial_deposit"], 2).'</strong></u> (the " Deposit") due and payable on the date of this Agreement, which shall be immediately released to an agent of Vendor to be held in escrow pending the Completion Date and: </div>
							<div style="margin-top:15px">2.1.2 paying into the Vendors bank account, or as otherwise directed by the Vendor, on the Completion Date (as defined below), the balance of the Purchase Price, being <strong>Dollars (USD BALANCE OF PURCHASE PRICE)</strong> <u><strong>$ '.number_format($data["balance_price"], 2).'</strong></u>.</div>
						</div>
					</td>
                  </tr>
                  <tr>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>3.0 COMPLETION</strong></div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px">3.1 The sale and purchase of the Property together with all furniture, chattels, fixtures and fittings attached to or being thereon ("Completion") shall occur on or before <strong>60 days from execution of this agreement</strong> (the "Completion Date"). </div>
						<div style="margin-top:15px">3.2 On the Completion Date, the Vendor will deliver to the Purchaser or to the Purchasers Attorney (as appropriate):</div>
						<div style="padding-left:20px;">
							<div style="margin-top:15px">3.2.1 duly completed Transfer of Land forms for the Property. </div>
							<div>3.2.2 the original Land Certificate relating to the Property;</div>
							<div>3.2.3 land tax statements showing that no property taxes are outstanding on the Property; </div>
							<div>3.2.4 evidence showing that all utility bills and homeowners association fees associated with the Property have been paid;</div>
							<div>3.2.5 copies of the corporate documents of the Vendor and a Certificate of Incumbency showing its directors and confirming that the Vendor is in good standing;</div>
							<div>3.2.6 a copy of the minutes of a meeting of the Vendor approving the sale of the Property to the Purchaser (the “Approval”);</div>
							<div>3.2.7 Vendor shall provide Purchaser with a survey of the Property showing the legal boundaries and any easements or encumbrances of any kind, if any.</div>
						</div>
					</td>
                  </tr>
                   <tr>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>4.0 TITLE</strong></div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px">4.1 &nbsp;&nbsp; Title to the Property shall be absolute and unencumbered title, registered pursuant to the provisions of the Registered Land Act (as amended) of Belize, Chapter 194 of the Laws of Belize, Revised Edition 2000, and the entries in the register and the content of the Land Registry block plan shall be conclusive evidence of ownership, the absence of encumbrances and the area and location of the Property.</div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px">5.0 Vendor shall provide Purchaser with evidence satisfactory to Purchaser that the Land Registry block plan at the Land Registry in Belmopan City, Cayo District, Belize, shows that Vendor has good, unencumbered, marketable, and absolute title to the Property, free and clear of all clouds on the title, all liens and encumbrances.</div>
						<div style="margin-top:15px">5.1 &nbsp;&nbsp; The Property is sold subject to Banyan Bay Suites Homeowners Association Covenants and Bylaws (as amended or replaced from time to time), a copy of which is annexed hereto as a Schedule A and the terms of which are incorporated by reference into, and form part of, this Agreement (the "Bylaws").</div>
						<div style="margin-top:15px">5.2 The Bylaws form an integral part of this Agreement and are binding upon the parties and enforceable in accordance with the said Bylaws. </div>
						<div style="margin-top:15px">5.3 The Bylaws shall survive completion and execution and shall be binding on the Purchaser, their successors and assigns. </div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>6.0 REPRESENTATIONS AND WARRANTIES </strong></div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px">6.1 The Vendor represents and warrants as follows:</div>
						<div style="padding-left:20px;">
							<div style="margin-top:15px">6.1.1 That it is the full legal and beneficial owner of the Property and registered as such with absolute title. </div>
							<div>6.1.2 That there are no overriding or conflicting interests affecting the Property known to the Vendor other than those (if any) already disclosed herein. </div>
							<div>6.1.3 That the Vendor enjoys vacant possession of the Property and that vacant possession shall be delivered on the Completion Date. </div>
							<div>6.1.4 That Vendor has no knowledge of any claims threatened or pending against the Property. </div>
							<div>6.1.5 That Vendor has enjoyed unobstructed rights of access and egress to and from the Property during the course of its ownership. </div>
							<div>6.1.6 That the Vendor shall retain the risk with respect to the Property until Completion. The Vendor shall have an obligation in the event of damage or destruction to the Property prior to Completion to undertake any repairs or renovations or make good any damage and repair and replace with building materials and designs of like quality to that which existed before any such damage. In the event that there is damage or total destruction of the Property by an insurable risk then the Vendor shall apply the proceeds of any insurance claim to facilitating repairs. </div>
							<div>6.1.7 That Vendor has no knowledge, actual or implied, of any structural defects, property defects, adverse geological, hazardous materials, or environmental conditions affecting the Property or its value, other than what Vendor has revealed to Purchaser in writing herein or will provide later in writing before the end of the Inspection Period.  </div>
							<div>6.1.8 That the building systems such as but not limited to the roof, foundations, heating and air conditioning, electrical, plumbing, and gas systems, to the extent each exists, are in good working condition and Vendor is not aware of any defects or repairs that may be needed to such systems at this time.  </div>
							<div>6.1.9 &nbsp;&nbsp; That the Property has not experienced prior flooding, hurricane, storm surge, or storm damage in any manner that has not been fully repaired and restored to good quality condition.  </div>
							<div>6.1.10 That all assessments, homeowners’ associations dues, taxes, and amounts due as applicable up to the date of the Completion Date, as owed against the Property, have been or will be paid in full by Vendor prior to the Completion Date.  </div>
							<div>6.1.11 That there are no leases, time shares, options, first right of refusals, vacation sharing agreements, or other contracts or agreements that will be in force and effect beyond the Completion Date. </div>
							<div>6.1.12 That these representations and warranties by Seller shall survive Closing on the Completion Date. </div>
						</div>
					</td>
                  </tr>
                  <tr>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>7.0 UTILITIES AND ASSOCIATED FEES</strong></div>
						<div style="margin-top:15px">On the Completion Date, the Purchaser shall assume and become solely responsible for all utility costs and fees, including reconnection fees, deposits, meter transfer fees, garbage disposal fees, homeowner’s association fees, management fees, strata lot fees or any other similar cost or fee associated with the Property.  During the Inspection Period, Vendor shall provide an itemized list of all such fees and costs that have been incurred on the Property over the past three (3) years. </div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>8.0 DEFAULT AND TERMINATION</strong></div>
						<div style="margin-top:15px">8.1 If the parties shall fail to obtain the Approval or if the Approval is not granted, this Agreement shall immediately terminate and be of no further effect and, subject to clause 8.4, none of the parties will be required to do anything further, and the Deposit will be returned to the Purchaser in full.</div>
						<div style="margin-top:15px">8.2 If the Vendor shall fail to complete this Agreement on the Completion Date for any reason, the Purchasers default only excepted, the Purchaser shall deliver to the Vendor a notice in writing specifying the default. If the Vendor shall fail to cure such default within fourteen (14) days after the date of such notice (in respect of which time shall be of the essence) the Purchaser may terminate this Agreement, and the Deposit will be returned to the Purchaser in full. </div>
						<div style="margin-top:15px">8.3 If the Purchaser shall fail to complete this Agreement on the Completion Date for any reason, the Vendors default only excepted, the Vendor shall deliver to the Purchaser a notice in writing specifying the default. If the Purchaser shall fail to cure such default within fourteen (14) days of the receipt of such notice (in respect of which time shall be of the essence) the Vendor shall have the right to terminate this Agreement and shall return the Deposit.</div>
						<div style="margin-top:15px">8.4 If this Agreement is terminated for any reason the Deposit will be returned to the Purchaser in full. </div>
						<div style="margin-top:15px">8.5 For the purpose of this Agreement, notices shall be deemed duly given if sent by prepaid registered mail to the Vendor or Purchaser at their respective addresses given above or if sent via electronic mail to the respective email addresses listed below and verified as received.</div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>9.0 EXCLUSIVITY</strong></div>
						<div style="margin-top:15px">In consideration of the payment of the Deposit pursuant to clause 2.1.1 above, the Vendor shall not offer for sale, transfer, convey or otherwise dispose of the Property prior to the Completion Date or the termination of this Agreement, whichever occurs earlier.</div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>10.0 FURTHER ASSURANCES</strong></div>
						<div style="margin-top:15px">The Vendor and the Purchaser agree to execute any and all future documents or assurances as may be required to give effect to the intent of this Agreement. </div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>11.0 SURVIVAL OF OBLIGATIONS</strong></div>
						<div style="margin-top:15px">The provisions contained herein shall, where the context so admits or requires, survive Completion and shall be binding on the parties, their successors and assigns.</div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>12.0 NUMBER AND GENDER</strong></div>
						<div style="margin-top:15px">In this Agreement the masculine gender shall include the feminine and neuter genders and the singular shall include the plural and vice versa.</div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>13.0 STAMP DUTY, LEGAL FEES AND TAXES</strong></div>
						<div style="margin-top:15px">13.1 &nbsp;&nbsp; Stamp duty, registration fees and any other similar fee or fee associated with the registration of the Transfer of Land forms and the registration of the Purchaser as the owners of the Property shall be for the account of the Purchaser. </div>
						<div style="margin-top:15px">13.2 Each party shall be responsible for their own legal fees.</div>
						<div style="margin-top:15px">13.3 On Completion, the Purchasers shall assume full responsibility and liability for the payment of all taxes related to the Property.</div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>14.0 MULTIPLE COUNTERPARTS</strong></div>
						<div style="margin-top:15px">14.1 This Agreement may be signed in any number of counterparts, all of which taken together shall constitute one and the same agreement. Any Party may enter into this Agreement by signing any such counterpart and each counterpart may be executed by the Parties and transmitted by facsimile transmission or by e-mail attachment and shall be as valid and effectual as if executed as an original.</div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>15.0 INSPECTION & DUE DILIGENCE PERIOD</strong></div>
						<div style="margin-top:15px">15.1 Purchaser shall have thirty (30) days after the Execution Date to complete any investigations, inspections, and reviews of the Property (the “Inspection Period”). Vendor shall have water, gas, and electricity turned on and serving the Property for Purchaser’s inspections, and through the date of possession or Completion, whichever occurs first. Beginning on the Execution Date, Vendor shall provide Purchaser within five (5) days of Vendor’s receipt or notice thereof, any written notices or legal documents that affect the Property.</div>
						<div style="margin-top:15px">15.2 Purchaser, together with persons deemed qualified by Purchaser and at Purchaser’s expense, shall have the right to enter upon the Property to conduct any and all inspections, investigations, and reviews of the Property. Purchaser’s right to enter upon the Property shall extend to any third-party that Purchaser deems appropriate to perform such inspections, investigations, or reviews. This right to enter upon the Property shall begin on the Execution Date and continue throughout the Inspection Period.</div>
						<div style="margin-top:15px">15.3 Purchaser may terminate this Agreement for any or no reason during the Inspection Period by providing Vendor with notice of termination. In the event that Purchaser terminates this Agreement during the Inspection Period, the Deposit shall be returned to Purchaser in full.</div>
						<div style="margin-top:15px">15.4 The Approval shall not be obtained until the Inspection Period has expired.</div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>16.0 APPLICABLE LAW</strong></div>
						<div style="margin-top:15px">16.1 This Agreement shall be construed in accordance with the laws of Belize and the parties hereto hereby submit to the non-exclusive jurisdiction of the Courts of Belize in respect of any dispute arising hereunder. </div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3">
						<div style="margin-top:15px"><strong>17.0 TOTAL AGREEMENT</strong></div>
						<div style="margin-top:15px">17.1 This Agreement supersedes any and all agreements, representations or understandings, oral or written, between the parties hereto and constitutes the entire agreement between them concerning the subject matter hereof. This Agreement cannot be amended orally but only by subsequent instrument in writing signed by the parties hereto.</div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3" align="center">
						<div style="margin:15px 0 50px 0"><strong>[SPACE INTENTIONALLY LEFT BLANK]</strong></div>
					</td>
                  </tr>
                  <br pagebreak="true"/>
				  <tr>
                      <td colspan="3">
						<div style="margin:0 0 50px 0"><strong>IN WITNESS WHEREOF</strong> the parties hereto have caused these presents to be executed in accordance with the law the day and year first herein written. </div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3"><br/>
						<div style="margin:0 0 20px 0"><strong>THE COMMON SEAL</strong> of the</div>
						<div style="margin:0 0 50px 0">Vendor, <strong>LYNX HOLDING LIMITED,</strong></div><br/>
					</td>
                  </tr>
				  <tr>
                    <td colspan="3">
						<div style="margin:0 0 30px 0">SELLER SIGNATURE <u><strong style="color:#fff;">________________</strong></u></div>
						<div style="margin:0 0 50px 0">DATE <u><strong>________________</strong></u></div>
					</td>
                  </tr>
				  <tr>
                    <td colspan="3">
						<div style="margin:0 0 60px 0">Email Address for Notice: <u><strong>'.$data["seller_email"].'</strong></u></div>
					</td>
                  </tr>
				  <tr><br>
                      <td colspan="3"><br/>
						<div style="margin:0 0 60px 0"><strong>THE COMMON SEAL</strong> of the Purchaser</div>
					</td>
                  </tr>
				  <tr>
                    <td colspan="3"><br/>
						<div style="margin-bottom:20px">BUYER SIGNATURE <u><strong style="color:#fff;">SIGNATURESIGNATURE:</strong></u></div>
						<div style="margin-bottom:20px">DATE <u><strong>'.date("d F Y").'</strong></u></div><br/>
						<div style="margin-bottom:20px">Email Address for Notice: &nbsp;&nbsp;&nbsp;<u><strong>'.$data["email"].'</strong></u></div>
						<div style="margin-bottom:20px"><u><strong>'.$data["address"].'</strong></u></div><br/>
					</td>
                  </tr>
                  <tr>
                    <td colspan="1">
						Buyer <u><strong style="color:#fff;">SIGNATURESIGNATURE:</strong></u>
					</td>
					<td colspan="2">
						Date  <u><strong>'.date("d F Y").'</strong></u>
					</td>
                  </tr>
				  <tr><br/>
                    <td colspan="3">
						<div style="margin:20px 0">Email Address for Notice: &nbsp;&nbsp;&nbsp;<u><strong>'.$data["email"].'</strong></u></div>
					</td>
                  </tr>
                  <br pagebreak="true"/>
				  <tr>
                    <td colspan="3" align="center">
						<div style="margin: 0px"><strong>Addendum to Purchase Agreement</strong></div><br/>
						<div style="margin:0px"><strong>Alaia/Banyan Bay Renovation and Conversion</strong></div><br/>
					</td>
                  </tr>
				  <tr>
                    <td colspan="3">
						<div style="margin:0 0 60px 0">Below is an overview of the conversion that will modernize and align Banyan Bay with the interior design criteria of Alaia. Our goal is to provide consistency across the Alaia platform and a seamless guest experience throughout the resort.</div>
					</td>
                  </tr><br/>
				  <tr><br/>
                    <td colspan="3"><br/>
						<div style="">Upgrades included but not limited to the following:</div><br/>
					</td>
                  </tr>
				  <tr><br/>
                    <td colspan="3">
						<ul style="margin:0 0 30px 0;list-style: circle;">
							<li>Flooring (Shaw CoreTec, Stratum 700 inyo oak, Exhibit E)</li>
							<li>Paint/Millwork (Exhibit B)</li>
							<li>Appliances-refrigerator, range, microwave (GE Stainless)</li>
							<li>Furniture (Exhibit C)</li>
							<li>Accessories (Exhibit D)</li>
							<li>Housewares (Exhibit D)</li>
							<li>Rain Shower-master/guest bath</li>
							<li>Toilets</li>
							<li>Interior/exterior light fixtures</li>
							<li>TV’s (55” living, 44” Bedrooms)</li>
							<li>Closet systems</li>
							<li>Window treatments</li>
							<li>Mattresses/Bedding</li>
							<li>Fire safety-smoke detector/alarm</li>
							<li>Kitchen and bath countertops</li>
						</ul>
					</td>
                  </tr>
				  <tr>
                    <td colspan="3"><br/>
						<div style="margin:0 0 20px 0">All renovations, materials and furnishings are subject to change, based on Marriott brand standards and approvals. Upon completion developer will guarantee acceptance in the rental management program and that all brand standards have been completed.</div>
						<div style="margin:0 0 20px 0">Please refer to Exhibits A-E, for detailed specs regarding layout, colors, materials, furniture, accessories, and housewares.</div>
					</td>
                  </tr>
	            </tbody>  
			</table>		
		</body>	
    </html>';
	return $html;
}

function stRegisLosCabosTemplate($data = null) {
	$html = '
	<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
	    <head>
	      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	      <title>Reservation Agreement</title>
	      <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
	    </head>
	    <body>
        <table border="0" cellpadding="0" cellspacing="0">
			<tbody>
                <tr>
                    <td align="center" colspan="2">
						<strong>RESERVATION AGREEMENT</strong>
                    </td>
                </tr><br>
				<tr>
                    <td colspan="2">
						<div style="margin:25px 0">This reservation agreement (<strong>"Reservation Agreement"</strong>) is made and entered into on '.date("d F Y").', by and between Banca Mifel, S.A., I.B.M., Grupo Financiero MIFEL, acting as fiduciary of the Administration Trust identified as 2669/2018 (<strong>“Trust”</strong>) and '.$data["name"].' (<strong>"Potential Buyer"</strong>), subject to the following terms.</div>
					</td>
                </tr>
				<tr>
                    <td colspan="2">
						<div><strong>1.</strong> That the Trust is acting as developer of the Master Condominium Property Regime St. Regis, Touristic Residential (the <strong><u>"Master Regime"</u></strong>).</div>
						<div style="margin-top:25px"><strong>2.</strong> That the Master Regime is located within the Integral Touristic Development Cabo Pacifica, also known as "Quivira Los Cabos", which is in process to formalize a property condominium regime in benefit of the Master Regime (<strong><u>"Quivira Regime"</u></strong>).</div>
						<div style="margin-top:25px"><strong>3.</strong> That is in process of incorporating a condominium property sub-regimes over the Master Regime which will comprise private units and common areas. </div>
						<div style="margin-top:25px"><strong>4.</strong> That within the Master Regime there is a private unit in which one of the sub-regimes described in recital 3. below shall be constituted (the <strong>"Sub-regime"</strong>), in which there shall be located one private unit identified as '.$data["strata_unit"].' (<strong>"Private Unit"</strong>) that shall correspond an undivided property percentage over the common areas of the Sub-Regime, jointly with the inclusions, including furniture and appliances (<strong>“Inclusions”</strong>). A description of the Private Unit and the Inclusions are described in Exhibit 1 of this Agreement.</div>
						<div style="margin-top:25px">The Trust shall provide the following incentives: (if applicable).</div>
						<div style="margin-top:25px"><strong>5.</strong> That the Private Unit shall be destined exclusively for residential purposes, and shall be part of and subject to the applicable provisions and rules and regulations of the Master Regime, the Quivira Regime and the Sub-Regime.</div>
						<div style="margin-top:25px"><strong>6.</strong> That Potential Buyer is interested in acquiring the Private Unit '.$data["strata_unit"].'. </div>
						<div style="margin-top:25px"><strong>7.</strong> Parties agree that the purchase price for the Private Unit shall be $ '.number_format($data["price_number"], 2).' USD ('.$data["price_words"].') 00/100 Dollars currency of the United States of America (the currency shall be referred hereinafter as <strong>"Dollars"</strong>)).</div>
						<div style="margin-top:25px"><strong>8.</strong> The Potential Buyer hereby commits to execute an escrow agreement (<strong>"Escrow Agreement"</strong>) with Global Escrow Solutions, LLC (<strong>"Escrow Agent"</strong>) and wire to the bank account provided by the Escrow Agent, within 3 (three) calendar days as of the execution of the Reservation Agreement, the refundable amount of $ '.number_format($data["reservation_deposit"], 2).' USD ('.$data["reservation_deposit_words"].' 00/100 Dollars) to the following bank account designated by the Trust (<strong>“Deposit”</strong>).</div>
						<div style="margin-top:25px">Within the following 2 (Two) calendar days after the Deposit has been transferred to the Escrow Agent, the Potential Buyer shall sign and provide to the Trust a disbursement instruction letter directed to the Escrow Agent, instructing to disburse the Deposit in favor of the Trust to the bank account appointed by the Trust from time to time.</div>
						<div style="margin-top:25px"><strong>9.</strong> The parties hereby agree that in case the Potential Buyer does not deliver the Deposit in full as set forth in the previous section, this Reservation Agreement shall be automatically terminated without the need of a judicial resolution or declaration and with no liability attributable to the Trust or further commitment whatsoever with Potential Buyer.</div>
						<div style="margin-top:25px"><strong>10.</strong> This Reservation Agreement shall have a validity of 15 (Fifteen) business days as of the signature of this Reservation Agreement (<strong>“Reservation Period”</strong>). The parties during the Reservation Period will discuss the terms and conditions of a promise to constitute a trust agreement regarding the Private Unit (<strong>“Promissory Agreement”</strong>) in order to have it executed prior to the conclusion of the Reservation Period. If such Promissory Agreement or any other document in writing is not signed within the Reservation Period then the Reservation Agreement shall be automatically terminated and with no further commitment between the parties, meaning that the Trust shall reimburse to Potential Buyer the Deposit and the Trust may transfer the Private Unit to any other third party.</div>
						<div style="margin-top:25px">Likewise, when the Promissory Agreement is entered into, the Potential Buyer may choose to instruct the Trust to keep the Deposit as a Contribution for the Purchase Price.</div>
						<div style="margin-top:25px"><strong>11.</strong> Potential Buyer hereby recognizes that at the signature of the Promissory Agreement, Potential Buyer shall deliver, as a guarantee deposit for the fulfillment of his obligations to be agreed within the Promissory Agreement, the amount of $ '.number_format($data["reservation_deposit"], 2).' USD ('.$data["reservation_deposit_words"].' 00/100 Dollars).</div>
						<div style="margin-top:25px"><strong>12.</strong> This Reservation Agreement is solely for the benefit of the Potential Buyer and his rights may not be assigned in any fashion by Potential Buyer. </div>
						<div style="margin:25px 0"><strong>13.</strong> The notifications and/or notices and/or requirements related with this Reservation Agreement shall be in writing and directed to the parties in the following address:</div>						
					</td>
                </tr>
				<tr>
					<td>
						<div>
							<div>Trust:</div>
							<div style="margin-top:30px;">'.$data["seller_name"].'</div>
							<div>Mexico, C.P. </div>
						</div>
					</td>
					<td>
						<div>
							<div>Potential Buyer</div>
							<div style="margin-top:30px;">'.$data["name"].'</div>
							<div>'.$data["address"].'</div>
						</div>
					</td>
				</tr>
				<tr>
                    <td colspan="2">
						<div style="margin-top:35px"><strong>14.</strong> This Reservation Agreement shall be governed by the laws and courts of the Municipality of Los Cabos, Baja California Sur and parties hereto irrevocably, expressly and clearly waive to other jurisdiction for reasons of their domiciles and for any other reason.</div>
						<div style="margin-top:25px"><strong>15.</strong> This Reservation Agreement may only by amended in writing by both parties.</div>
						<div style="margin-top:25px">The Potential Buyer recognizes and affirms that when the proposal for acquisition of the Private Unit was made to them, they were located in Mexican territory. At no time has the Potential Buyer received any proposal outside of Mexico with respect to this Reservation Agreement and that upon the date of execution hereof, any further communication will be considered as consequential thereto. </div>
						<div style="margin-top:25px">This Reservation Agreement may be executed in more than one counterpart, each of which shall be considered one sole document. </div>
						<div style="margin-top:25px"><strong><i>The term of the Reservation Agreement is not binding to the Potential Buyer but binds the Trust and is an outline of a possible future agreement.</i></strong></div>
						<br pagebreak="true"/>
						<div style="margin-top:25px"><strong>IN WITNESS WHEREOF,</strong> the parties have executed this Reservation Agreement as of the date shown in the first paragraph above.</div>
					</td>
				</tr>	
				<tr>
					<td>
						<div style="margin-top:35px">
							<div><strong>POTENTIAL BUYER</strong></div>
							<div style="margin-top:10px;">Name: '.$data["name"].'</div>
						</div>
					</td>
					<td>
						<div style="margin-top:35px">
							<div><strong>Trust</strong></div>
							<div style="margin-top:10px;">By: '.$data["name"].' Attorney in Fact</div>
						</div>
					</td>
				</tr>
            </tbody>  
		</table>';
		if($data['amendment_text'] != ""){
		    $html .= '<br pagebreak="true"/>
		    <table border="0" cellpadding="0" cellspacing="0">
				<tbody>
	                  <tr>
	                     <td align="center" colspan="2">
							<strong>AMENDMENT TO PURCHASE AND SALE AGREEMENT</strong>
	                     </td>
	                  </tr>
					  <tr>
	                      <td colspan="2">
	                      <br>
							<div style="margin:25px 0">THIS AMENDMENT TO THE PURCHASE AND SALE AGREEMENT (<strong>“Amendment”</strong>) is made on this by and between <u><strong>'.$data["seller_name"].'</strong></u> <strong>(Seller)</strong>, and <u><strong>'.$data["name"].'</strong></u> <strong>(Purchaser)</strong>, (collectively referred to herein as the “Parties”), to modify the terms of the Purchase and Sale Agreement. </div><br>
						</td>
	                  </tr>
					  <tr>
	                      <td colspan="2"><br>
							'.$data["amendment_text"].'<br>
						</td>
	                  </tr>
					  <tr>
	                      <td colspan="2">
							<div style="margin:80px 0 25px 0"><strong>IN WITNESS WHEREOF,</strong> the parties have executed this Amendment effective as of the date set forth above. </div>
						</td>
	                  </tr>
					  <tr>
						<td style="vertical-align: top;">
							<div style="width:100%;">
								<div>
									<strong><u>Purchaser:</u></strong>
								</div>
								<div style="margin-top:78px;">
									By: <u><strong>'.$data["name"].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Print Name: <u><strong style="color:#fff;">SIGNATURESIGNATURE:</strong></u>
								</div>
								<div style="margin-top:20px;">
									Title: <u><strong>____________</strong></u>
								</div>
								<div style="margin-top:20px;">
									Date: <u><strong>'.date("d F Y").'</strong></u>
								</div>
							</div>
						</td>
						<td style="vertical-align: top;">
							<div style="width:100%;">
								<div>
									<strong><u>Seller:</u></strong>
								</div>
								<div style="margin:20px 0 40px 0;">
									Seller
								</div>
								<div style="margin-top:20px;">
									By: <u><strong>'.$data['seller_name'].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Print Name: <u><strong>________________</strong></u>
								</div>
								<div style="margin-top:20px;">
									Title: <u><strong>'.$data['seller_title'].'</strong></u>
								</div>
								<div style="margin-top:20px;">
									Date: <u><strong>'.$data['executed_of'].'</strong></u>
								</div>
							</div>	
						</td>
					  </tr>
	            </tbody>  
				</table>';
			}
	    $html .= '</body>	
        </html>';
    return $html;
}


function beachClubReservation($data = null) {
	$html = '<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Reservation Agreement</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
      <table border="0" cellpadding="0" cellspacing="0">
			<tbody>
                  <tr>
                     <td align="center" colspan="2">
						<strong>RESERVATION & ESCROW AGREEMENT</strong>
						<br>
						<br>
                     </td>
                  </tr>
				  <tr>
                    <td colspan="2">
						<div style="margin:25px 0">This	Reservation	and	Escrow Agreement (the <strong>"Agreement"</strong>) is made	on <u><strong>'.$data["name"].'</strong></u> (the “Effective Date”), BETWEEN SEAGRASS HOLDINGS LIMITED (Seller) and <u><strong>'.$data['seller_name'].'</strong></u> (“Buyer”).</div>
						<br>
					</td>
                  </tr>
				  <tr>
                    <td colspan="2">
						<div><strong>1.</strong> This Reservation Deposit expresses the Purchasers interest in purchasing a beachfront condominium (the "Unit") in the proposed The Beach Club at Alaia Resort to be located on Seagrape Drive, San Pedro Town, Ambergris Caye, Belize (the “Project”).</div>
						<div style="margin-top:25px"><strong>2.</strong> The Seller hereby acknowledges receipt from the Purchaser of a reservation deposit (the "Reservation Deposit") in the amount of $5,000.00 USD. The Reservation Deposit shall be held by the Seller in escrow, in accordance with the terms and conditions contained herein.</div>
						<div style="margin-top:25px"><strong>3.</strong> This Reservation Deposit expresses the Purchasers interest in purchasing <u><strong> '.number_format($data["price_number"], 2).'</strong></u> a beachfront condominium (the "Unit") for ($0.00) Zero dollars & no/100 USD in the proposed Alaia Resort to be located on Seagrape Drive, San Pedro Town, Ambergris Caye, Belize (the “Project”).</div>
						<div style="margin-top:25px"><strong>4.</strong> If the Purchaser does not sign and return the Contract (with the balance of the initial Contract deposit, if any) within 7 days of receipt, this Agreement will be cancelled automatically.</div>
						<div style="margin-top:25px"><strong>5.</strong> Before both the Purchaser and the Seller sign and deliver the Contract, either party may cancel this Agreement for any reason whatsoever (or for no reason) and without incurring liability to the other, by giving written notice to the other in accordance with this Agreement.</div>
						<div style="margin-top:25px"><strong>6.</strong> In the event of such cancellation the Purchaser will no longer have any preferential purchase rights to purchase the Unit.</div>
						<div style="margin-top:25px"><strong>7.</strong> The Seller may act in reliance upon any writing or instrument or signature which it in good faith believes to be genuine and may assume that any person purporting to give any written notice, advice or instructions in connections with the provisions hereof has been duly authorized to do so.</div>
						<div style="margin-top:25px"><strong>8.</strong> The Purchaser understands and agrees that this Agreement is not an agreement to sell the Unit or negotiate the sale of the Unit, and does not confer upon Purchaser any interest in or lien upon the Unit. The Seller may take any action and record any documents pertaining to the Unit as the Seller may wish.</div>
						<div style="margin-top:25px"><strong>9.</strong> The Purchaser shall not be entitled to assign this Reservation Agreement or its rights hereunder without the prior written consent of Seller, which may be withheld by Seller with or without cause (and even if Sellers refusal to grant consent is unreasonable). To the extent that the Seller consents to any such assignment, said consent may be conditioned in any manner whatsoever, including, without limitation, charging an assignment or transfer fee. Without limiting the generality of the foregoing, the Purchaser shall not, without first obtaining the prior written consent of the Seller (which may be granted or withheld in Sellers sole and absolute discretion) advertise, market and/or list the Unit for sale or resale, whether by placing an advertisement, listing the Unit with a broker, allowing the Unit to be listed on a Multiple Listing Service or otherwise.</div>
						<br pagebreak="true"/>
						<div style="margin-top:25px"><strong>10.</strong> The rights created by this Reservation Agreement shall inure to the benefit of, and the obligations created hereby shall be binding upon, the successors and assigns of the parties.</div>
						<div style="margin-top:25px"><strong>11.</strong> This Agreement shall be governed and construed in accordance with the laws of Belize.</div>
						<div style="margin:50px auto;text-align:center;">IN WITNESS WHEREOF the parties have duly set their hands and seals.</div>						
					</td>
                  </tr>
				  <tr>14587453
					<td>
						<div style="padding-right:25px;margin-bottom:30px;">
							<div style="margin-bottom:30px;">Purchaser <span style="float:right;">Date:</span></div>
							<div><u><strong></strong></u> <span style="float:right;"><u><strong>'.date("d F Y").'</strong></u></span></div>
						</div>
					</td>
					<td>
						<div style="padding-left:25px;margin-bottom:30px;">
							<div style="margin-bottom:30px;">Purchaser <span style="float:right;">Date:</span></div>
							<div><u><strong>'.date("d F Y").'</strong></u> <span style="float:right;"><u><strong></strong></u></span></div>
						</div>
					</td>
				  </tr>
				  <tr>
					<td>
						<div style="padding-right:25px">Print</div>
					</td>
					<td>
						<div style="padding-left:25px">Print</div>
					</td>
				  </tr>
				  <tr>
                    <td>
						<div style="margin-top:30px;padding-right:25px">
							<div><u><strong style="color:#fff;">SIGNATURESIGNATURE:</strong></u> </div>
							
						</div>
					</td>
				  <td>
					<div style="margin-top:30px;padding-right:25px">
							<div><span style=""><u><strong style="color:#fff;">SIGNATURESIGNATURE:</strong></u></span></div>
							
					</div>
					</td>
				  </tr>	
				  <tr>
				  <td ><div style="margin-top:30px;">Seagrass Holdings Limited <span style="float:right;">Date:</span></div></td>
				  </tr>
            </tbody>  
		</table>		
	</body>	
</html>';
    return $html;
  }
  
?>
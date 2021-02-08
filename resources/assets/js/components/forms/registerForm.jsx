
import React, { Component} from "react";
import { withStyles } from '@material-ui/core/styles';
import Button from '@material-ui/core/Button';
import { Modal,Form,Row,Col } from 'react-bootstrap';
import TextFieldValidate from  "../TextFields/TextfFeldValidation.js"
import 'react-toastify/dist/ReactToastify.css';
import MenuItem from '@material-ui/core/MenuItem';
import FormControl from '@material-ui/core/FormControl';
import Select from '@material-ui/core/Select';
import InputLabel from '@material-ui/core/InputLabel';
import InputMask from "react-input-mask";
import { ToastContainer, toast } from 'react-toastify';



const useStyles = theme => ({
    root: {
      flexGrow: 1,
     
    },
    fullpaper: {
      padding: theme.spacing(2),
      // margin: 'auto',
      // maxWidth: 200,
    },
    formControl: {
      margin: theme.spacing(1),
      minWidth: 120,
    },
  
    cardHeaderStylePref:{
      background: 'linear-gradient(to right bottom, #f07104, #f07104)',
     
      height: 30,
      padding: 0
    },
    title: {
       marginTop:8
    
    },
    paper: {
      textAlign: 'center',
      maxWidth: 400,
      margin: `${theme.spacing(1)}px auto`,
      padding: theme.spacing(2),
    }, 
    attribute: {
      margin: `${theme.spacing(1)}px auto`,
      padding: theme.spacing(2),
    },
    image: {
      width: 128,
      height: 128,
    },
    img: {
      margin: 'auto',
      display: 'block',
      maxWidth: '100%',
      maxHeight: '100%',
    },
    button: {
      display: 'block',
      marginTop: theme.spacing(2),
    },
  });


  class RegisterForm  extends Component {

    constructor(props) {
        super(props);
    
        this.state = {
            Cust_Name:{value:'',errorMsg:'',rules :['mandatory']},
            Comp_Person_Name : { value :'' , errorMsg:'',rules :[]},
            Cust_Person_Name : { value :'' , errorMsg:'',rules :['mandatory']},
            Comp_Email : { value :'' , errorMsg:'' , rules : ['email']},
            Cust_Email : { value :'' , errorMsg:'',rules : ['email']},
            Comp_Contact_No : {value :'' , errorMsg:'',rules : []},
            Cust_Contact_No : {value :'',errorMsg:'',rules : []},
            Sme_Client :  {value :'',errorMsg:'',rules : []},
            Cust_Office_No : {value :'',errorMsg:'',rules : []},
            Sme_Sector_Tm : {value :'',errorMsg:'',rules : []},
            Cust_Sector : {value :'',errorMsg:'',rules : []},
            Sme_Agm : {value :'',errorMsg:'',rules : []},
            Cust_Address : {value:'',errorMsg:'',rules : []},
            Sme_Rev : {value:'',errorMsg:'',rules : []},
            Sme_Remove : {value:'',errorMsg:'',rules : []},
            Sme_Bank_Address : {value:'',errorMsg:'',rules : []},

        };
      }

      handleFormSubmission =()=> {
        event.preventDefault()
      
        const { history } = this.props      
        const path = `/api/forms/AddCustomerProfile`;
      
        fetch(path, {
         
          method: 'POST',
          mode: 'same-origin',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          body: JSON.stringify({
           
            CUST_NAME : this.state.Cust_Name.value,
            COMP_PERSON_NAME : this.state.Comp_Person_Name.value,
            CUST_PERSON_NAME : this.state.Cust_Person_Name.value,
            COMP_EMAIL:this.state.Comp_Email.value,
            CUST_EMAIL: this.state.Cust_Email.value,
            COMP_CONTACT_NO : this.state.Comp_Contact_No.value,
            CUST_CONTACT_NO : this.state.Cust_Contact_No.value,
            SME_CLIENT : this.state.Sme_Client.value,
            CUST_OFFICE_NO : this.state.Cust_Office_No.value,
            SME_SECTOR_TM : this.state.Sme_Sector_Tm.value,
            CUST_SECTOR : this.state.Cust_Sector.value,
            SME_AGM : this.state.Sme_Agm.value,
            CUST_ADDRESS : this.state.Cust_Address.value,
            SME_BANK_ADDRESS: this.state.Sme_Bank_Address.value,
            SME_REV : this.state.Sme_Rev.value,
            SME_REMOVE : this.state.Sme_Remove.value,
          _token : $('meta[name="csrf-token"]').attr('content'), 
          })
        }) .then((response) => {

          if (response.status == 200){
          response.json().then((data)=>{
            console.log(data);
            this.props.doneSubmit(data)
            this.setState({
             
              lgShow :false,
              openDialog : false,})
          });
          toast.success('🦄 profile info successfully updated!', {
            position: "top-right",
            autoClose: 5000,
            hideProgressBar: false,
            closeOnClick: true,
            pauseOnHover: true,
            draggable: true,
            progress: undefined,
            });
        }
      })
      .then((data) => {
        console.log('Request succeeded with JSON response', data);
      })
      .catch(function (error) {
        console.log('Request failed', error);
      });
    
    }


           // control form validation
           textAreaHandler= (rules,event)=>{
       
            if(rules.rules.length > 0){
              let stat = { value : event.target.value , errorMsg:'' , rules : rules.rules} 
              for (var i = 0; i <= rules.rules.length; i++) {
           
              if(rules.rules[i] === 'mandatory') {
                  if(event.target.value.length < 4){
                   stat = { value : event.target.value , errorMsg:'to short' , rules : rules.rules} 
                   this.setState({ [event.target.name] :stat }) 
                   break;
                  }else{
                   stat = { value : event.target.value , errorMsg:'' , rules : rules.rules } 
                  }
              }
                  if(rules.rules[i] === 'email') {
              let regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
              if(!regEmail.test(event.target.value))
              {
                 stat = { value : event.target.value , errorMsg:'Invalid Email' , rules : rules.rules } 
                 this.setState({ [event.target.name] :stat }) 
                 break;
              }
              else
              {
                 stat = { value : event.target.value , errorMsg:'' , rules : rules.rules }   
              }
            } 
                }
                this.setState({ [event.target.name] :stat }) 
            }
          
          else 
          {
            let stat = { value : event.target.value , errorMsg:'' , rules : rules.rules } 
            this.setState({ [event.target.name] :stat }) 
          }
    
          }


render(){
    const {classes} = this.props;
    return (
<Modal
        scrollable ={true}
        size="lg"
        show={this.props.form}
        onHide={this.props.onHide}
        aria-labelledby="example-modal-sizes-title-lg"
        className={"margin-top-41"}>
      
        <Modal.Header closeButton>
          <Modal.Title id="example-modal-sizes-title-lg">
          Add NEW CUSTOMER
          </Modal.Title>
        </Modal.Header>
        <Modal.Body >
        <Form>
  <Row  className={"margin-top-41"}>
    <Col>
    
      <div style={{ width: "103%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   
   <TextFieldValidate 
             id ={"Cust_Name"}  
             label= {"Customer Name"}
             fullwidth = {true}
             name= {'Cust_Name'}
             stat= {this.state.Cust_Name}
             value={this.state.Cust_Name.value} 
             multiline ={true}
             textAreaHandler={this.textAreaHandler}
               />
    </div>
    </Col>
    <Col>
     
      <div style={{ width: "103%"}} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   <TextFieldValidate 
               
                label= {"Comp_Person_Name"}
                value={this.state.Comp_Person_Name.value} 
                multiline ={true}
                fullwidth = {true}
                name= {'Comp_Person_Name'}
                id= {'Comp_Person_Name'}
                stat= {this.state.Comp_Person_Name}
               textAreaHandler={this.textAreaHandler}
               />
    </div>
    </Col>
  </Row >
  <Row className={"margin-top-41"}>
    <Col>
   
      <div style={{ width: "103%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   <TextFieldValidate  
             id={'Cust_Person_Name'} 
               label= {"Customer Person Name"}
               value={this.state.Cust_Person_Name.value} 
               multiline ={true}
               fullwidth = {true}
               name= {'Cust_Person_Name'}
               stat= {this.state.Cust_Person_Name}
               textAreaHandler={this.textAreaHandler}
              

               />
               
    </div>
    </Col>
    <Col>
   
      <div style={{ width: "103%"}} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   <TextFieldValidate  
   
                id ={"Comp_Email"}
                label= {"Company Email"}
                name= {'Comp_Email'}
                value={this.state.Comp_Email.value} 
                stat= {this.state.Comp_Email}
                multiline ={true}
                fullwidth = {true}
                textAreaHandler={this.textAreaHandler}
            
                />
    </div>
    </Col>
  </Row >
  <Row className={"margin-top-41"}>
    <Col>
     
      <div style={{ width: "103%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
      <TextFieldValidate  
   
                id ={"Cust_Email"}
                label= {"Customer Email"}
                name= {'Cust_Email'}
                value={this.state.Cust_Email.value} 
                stat= {this.state.Cust_Email}
                multiline ={true}
                fullwidth = {true}
                textAreaHandler={this.textAreaHandler}

       />
    </div>
    </Col>
    <Col>
      
      <div style={{ width: "103%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   <TextFieldValidate 
                    id ={"Comp_Contact_No"}  
                    label= {"Company Contact No"}
                    value={this.state.Comp_Contact_No.value} 
                    stat= {this.state.Comp_Contact_No}
                    multiline ={true}
                    fullwidth = {true}
                    textAreaHandler={this.textAreaHandler}
                 
      />
    </div>
    </Col>
  </Row>
   <Row className={"margin-top-41"}>
    <Col>
     
      <div style={{ width: "103%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   <TextFieldValidate  
             id ={"Cust_Contact_No"}  
              label= {"Customer Contact Number"}
              stat ={this.state.Cust_Contact_No}
              value={this.state.Cust_Contact_No.value} 
              multiline ={true}
              fullwidth = {true}
              textAreaHandler={this.textAreaHandler}
            
               />
    </div>
    </Col>
    <Col>
      
      <div style={{ width: "103%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   <TextFieldValidate 
            id ={"Sme_Client"}  
            label= {"SME Bank Client"}
            stat ={this.state.Sme_Client}
            value={this.state.Sme_Client.value} 
            multiline ={true}
            fullwidth = {true}
            textAreaHandler={this.textAreaHandler}
        
            
               />
    </div>
    </Col>
  </Row>
  <Row className={"margin-top-41"}>
    <Col>
      <div style={{ width: "103%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   <TextFieldValidate 
                id ={"Cust_Office_No"}  
                name ={"Cust_Office_No"}
                label= {"Customer Office Number"}
                value={this.state.Cust_Office_No.value} 
                stat = {this.state.Cust_Office_No}
                multiline ={true}
                fullwidth = {true}
                textAreaHandler={this.textAreaHandler}
            
               />
    </div>
    </Col>
    <Col>
     
      <div style={{ width: "103%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
        
   <TextFieldValidate 
               id ={"Sme_Sector_Tm"}  
                name = {"Sme_Sector_Tm"}
                label= {"SME Sector TM"}
                value={this.state.Sme_Sector_Tm.value} 
                stat = {this.state.Sme_Sector_Tm}
                multiline ={true}
                fullwidth = {true}
                textAreaHandler={this.textAreaHandler}
               
               />
    </div>
    </Col>


  </Row>


  <Row className={"margin-top-41"}>
    <Col>
      <div style={{ width: "104%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   <TextFieldValidate 
              id ={"Cust_Sector"}  
              name = {"Cust_Sector"}
             label= {"Customer Sector"}
             value={this.state.Cust_Sector.value} 
             stat = {this.state.Cust_Sector}
             multiline ={true}
             fullwidth = {true}
             textAreaHandler={this.textAreaHandler}
            
             
               />
    </div>
    </Col>
    <Col>
      
      <div style={{ width: "104%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   <TextFieldValidate 
                  id ={"Sme_Agm"}  
                  name = {"Sme_Agm"}
                  stat = {this.state.Sme_Agm}
                 label= {"SME AGM"}
               value={this.state.Sme_Agm.value} 
               multiline ={true}
               fullwidth = {true}
               textAreaHandler={this.textAreaHandler}
           
               />
    </div>
    </Col>
  </Row>
  <Row className={"margin-top-41"}>
    <Col>
     
      <div style={{ width: "104%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   <TextFieldValidate 
                id ={"Cust_Address"}  
                name ={"Cust_Address"}
                stat = {this.state.Cust_Address}
                label= {"Customer Address"}
                value={this.state.Cust_Address.value} 
                multiline ={true}
                fullwidth = {true}
                textAreaHandler={this.textAreaHandler}
             
               
               />

    </div>
    </Col>
    <Col>
      
      <div style={{ width: "104%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
   <TextFieldValidate 
                id ={"Sme_Bank_Address"}  
                name ={"Sme_Bank_Address"}
                stat = {this.state.Sme_Bank_Address}
                value={this.state.Sme_Bank_Address.value} 

              label= {"SME Bank Address"}
              multiline ={true}
              fullwidth = {true}
              textAreaHandler={this.textAreaHandler}
           
         
               />
    </div>
    </Col>
  </Row>
  <Row className={"margin-top-41"}>
    <Col>
     
      <div style={{ width: "104%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
      <TextFieldValidate 
                id ={"Sme_Rev"}  
                stat = {this.state.Sme_Rev}
               label= {"SME REV"}
               name = {"Sme_Rev"}
               value={this.state.Sme_Rev.value} 
               multiline ={true}
               fullwidth = {true}
               textAreaHandler={this.textAreaHandler}
              
               />
    </div>
    </Col>
    <Col>
     
      <div style={{ width: "78%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">


<FormControl className={classes.formControl}>
        <InputLabel id="demo-controlled-open-select-label">Customer City</InputLabel>
        <Select
          labelId="demo-controlled-open-select-label"
          id="CUSTOMER-CITY"
          //  value={this.state.selectedClient}
          // onChange={e => { this.props.onchange(e); this.HandlerOnchangeDropDown(e) }}
        >
          
          <MenuItem value="0">
            <em>Please select client</em>
          </MenuItem>
          {/* {clientDetails.map(client => (
          <MenuItem  key={client.APP_ID.toString()}  value={client.APP_ID}>{client.COMP_PERSON_NAME} </MenuItem>
          ))} */}
        </Select>
      </FormControl>
    </div>
    </Col>
  </Row>
  <Row className={"margin-top-41"}>
    <Col>
      
      <div style={{ width: "104%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
      <TextFieldValidate  
       id ={"Sme_Remove"}  
       label= {"SME Remove"}
       stat = {this.state.Sme_Remove}
       value={this.state.Sme_Remove.value} 
       multiline ={true}
       fullwidth = {true}
      textAreaHandler={this.textAreaHandler}
      rules = {this.state.rules} />
      
    </div>
    </Col>
    <Col>
     
      <div style={{ width: "78%" }} className="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center">
      <FormControl className={classes.formControl}>
     
     <InputLabel id="demo-controlled-open-select-label">Customer State</InputLabel>
     <Select
       labelId="demo-controlled-open-select-label"
       id="CUSTOMER-STATE"
       //  value={this.state.selectedClient}
       // onChange={e => { this.props.onchange(e); this.HandlerOnchangeDropDown(e) }}
     >

       
       <MenuItem value="0">
         <em>Please select client</em>
       </MenuItem>
       {/* {clientDetails.map(client => (
       <MenuItem  key={client.APP_ID.toString()}  value={client.APP_ID}>{client.COMP_PERSON_NAME} </MenuItem>
       ))} */}
     </Select>
   </FormControl>
    </div>
    </Col>
  </Row >
 
  <Row  >
    <Col xs={12} className={classes.paper}>
        <div className={classes.root}>
         <Button className={classes.button} className="w-135"  variant="contained" color="primary"onClick={this.handleFormSubmission} >SUBMIT</Button>
       </div>
       </Col>
   </Row>
       

</Form>
        </Modal.Body>
      </Modal>
    )
    }
  }

    export default withStyles(useStyles)(RegisterForm)
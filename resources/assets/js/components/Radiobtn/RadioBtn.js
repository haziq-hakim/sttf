import React, { Component} from "react";
import Radio from '@material-ui/core/Radio';
import RadioGroup from '@material-ui/core/RadioGroup';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import FormControl from '@material-ui/core/FormControl';
import FormLabel from '@material-ui/core/FormLabel';

class RadioBtn extends Component{

  constructor(props) {
    super(props);

    this.state = {
         '0' : null ,
         '1' : null,
         '2' : null,
         '3' : null,
         '4' : null,
         '5' : null,
         '6' : null,
         '7' : null,
         '8' : null,
         '9' : null,
         '10' : null,
         '11' : null,
         '12' : null
    }
      
  }

  handleChange=(event)=>{
   

  //   this.setState(previousState=>{ [event.target.name]: event.target.value
  //   }, () => {
  //     this.props.radioBtnHandler(this.state);
  // });
  this.props.radioBtnHandler(event,this.props.index);

 
  }
  

  
  handleDialogOpen = () => {
    this.setState({openDialog : true});
  };


    render() {
  return (
    <FormControl component="fieldset">
     
      <RadioGroup row aria-label="checklist"  name={this.props.id.toString()} value={this.props.value}   onChange={this.handleChange}>
     
      {this.props.labels.map((label,index) => (
        // let index = index++
        
        <FormControlLabel 
       
        value={label.value} 
        // name={this.props.id.toString()}
        // onChange={this.handleChange}
        control={<Radio color="primary" />} 
        label={label.name} />
        ))}
      </RadioGroup>
    </FormControl>
  )

}
}
export default RadioBtn 